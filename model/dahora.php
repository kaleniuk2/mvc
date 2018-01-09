<?php

	class dahora extends model{

		public function getDahora(){

			$sql = "SELECT * FROM oi";

			$sql = $this->db->query($sql);

			return $sql->fetchAll();
		}
	}

?>