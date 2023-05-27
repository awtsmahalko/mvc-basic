<?php
class Schema extends Connection
{
	public function runner()
	{
		$response = [];

		$response[] = $this->tbl_users();
		return $response;
	}

	public function tbl_users()
	{
		$tables = [];
		$default['created_at'] = $this->metadata('created_at', 'datetime', '', 'NOT NULL', 'CURRENT_TIMESTAMP');
		$default['updated_at'] = $this->metadata('updated_at', 'datetime', '', 'NOT NULL', '', 'ON UPDATE CURRENT_TIMESTAMP');

		// TABLE HEADER
		$tables[] = array(
			'name'      => "tbl_users",
			'primary'   => "user_id",
			'fields' => array(
				$this->metadata("user_id", 'int', 11, 'NOT NULL', '', 'AUTO_INCREMENT'),
				$this->metadata("fullname", 'text'),
				$this->metadata("address", 'text'),
				$this->metadata("position", 'text'),
				$this->metadata("username", 'text'),
				$this->metadata('password', 'varchar', 32),
				$this->metadata('user_status', 'int', 1),
				$this->metadata('is_admin', 'int', 1),
				$default['created_at'],
				$default['updated_at']
			)
		);

		return $this->schemaCreator($tables);
	}

	public function metadata($name, $type, $length = '', $allow_null = 'NOT NULL', $default = '', $extra = '', $comment = '')
	{
		return array(
			'name'          => $name,
			'type'          => $type,
			'length'        => $length,
			'allow_null'    => $allow_null,
			'default'       => $default,
			'extra'         => $extra,
			'comment'       => $comment,
		);
	}

	public function schemaCreator($tables)
	{
		$create = "";
		foreach ($tables as $table) {
			$name = $table['name'];
			$fields = $table['fields'];
			$is_exists = $this->table_exists($name);

			$field_list = array();
			foreach ($fields as $field) {

				$fld = array();
				$fld[] = "`$field[name]`";
				$fld[] = $field['type'] . ($field['length'] > 0 ? "($field[length])" : "");
				$fld[] = $field['allow_null'];
				$fld[] = $field['default'] != '' ? "DEFAULT $field[default]" : "";
				$fld[] = $field['extra'];
				$fld[] = $field['comment'] != '' ? "COMMENT $field[comment]" : "";

				if ($is_exists == 1) {
					// $is_column_exists
					if ($this->column_exists($name, $field['name']) != 1) {
						array_push($field_list, (" ADD " . implode(" ", $fld)));
					}
				} else {
					$metadata = implode(" ", $fld);
					array_push($field_list, $metadata);
				}
			}
			$is_exists == 1 ? "" : array_push($field_list, "PRIMARY KEY (`{$table['primary']}`)");
			if (count($field_list) > 0) {
				if ($is_exists == 1) {
					$query = "ALTER TABLE `$name`";
				} else {
					$query = "CREATE TABLE `$name` (";
				}
				$query .= implode(",", $field_list);
				$query .= $is_exists == 1 ? "" : ') ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;';
				$create .= $query;
				$this->query($query);
			}
		}
		return $create;
	}

	public function triggerCreator($triggers)
	{
		$create = [];
		foreach ($triggers as $trigger) {
			$trigger_name   = $trigger['name'];
			$table          = $trigger['table'];
			$action_time    = $trigger['action_time'];
			$event          = $trigger['event'];
			$statement      = $trigger['statement'];

			$query = "";

			if (is_array($statement) == 1) {
				$query .= "DELIMITER $$ ";
				$statements = implode(" ", $statement);
				$begin = "BEGIN";
				$end = "END$$ DELIMITER ;";
			} else {
				$statements = $statement;
				$begin = "";
				$end = "";
			}

			$query .= "CREATE TRIGGER $trigger_name $action_time $event ON $table FOR EACH ROW $begin $statements $end";
			$status = $this->query($query);
			$create[] = [$status, $query];
		}

		return $create;
	}
}
