<?php
class Users extends Connection
{
	private $table = 'tbl_users';
	private $pk = 'user_id';
	private $name = 'username';

	public $posts;

	public function add()
	{
		$username = $this->post('username');
		$is_exist = $this->select($this->table, $this->pk, "username = '$username'");
		if ($is_exist->num_rows > 0) {
			return 2;
		} else {
			$pass = $this->post('password');
			$form = array(
				'fullname' => $this->post('fullname'),
				'address' => $this->post('address'),
				'username' => $username,
				'position' => $this->post('position'),
				'password' => md5($pass),
				'user_status' => 1,
			);
			return $this->insert($this->table, $form);
		}
	}

	function show()
	{
		$count = 1;
		$rows = array();
		$result = $this->select($this->table);
		while ($row = $result->fetch_assoc()) {
			$row["count"] = $count++;
			$row["date"] = date(DATE_FORMAT, strtotime($row['created_at']));
			$rows[] = $row;
		}
		return ["data" => $rows];
	}
}
