<?php 
class Mread extends CI_Model{
    function omset_harian(){
        $query = $this->db->query("SELECT reservation_date, SUM(price) as price from reservation Group by reservation_date");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    function omset_mingguan(){
        $query = $this->db->query("SELECT YEARWEEK(reservation_date) As tahun_minggu, SUM(price) as price from reservation Group by YEARWEEK(reservation_date)");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    function omset_bulanan(){
        $query = $this->db->query("SELECT CONCAT(YEAR(reservation_date),'/',MONTH(reservation_date)) AS tahun_bulan, SUM(price) AS jumlah_bulanan
FROM reservation
GROUP BY YEAR(reservation_date),MONTH(reservation_date)");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
}
 ?>