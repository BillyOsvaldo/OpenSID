 <!-- widget Statistik Pengunjung -->

<div class="single_bottom_rightbar">
  <h2><i class="fa fa-bar-chart-o"></i> Statistik Pengunjung</h2>
  <div class="">
  <?php
  $ip = $_SERVER['REMOTE_ADDR']."{}";
  if(!isset($_SESSION['MemberOnline'])){
    $cek = $this->db->query("SELECT Tanggal,ipAddress FROM sys_traffic WHERE Tanggal='".date("Y-m-d")."'");
    if($cek->num_rows()==0){
      $up = $this->db->query("INSERT  INTO sys_traffic (Tanggal,ipAddress,Jumlah) VALUES ('".date("Y-m-d")."','".$ip."','1')");
      $_SESSION['MemberOnline']=date('Y-m-d H:i:s');
    }else{
      $res  = $cek->result_array();
      $ipaddr = $res['ipAddress'].$ip;
      $up = $this->db->query("UPDATE sys_traffic SET Jumlah=Jumlah + 1,ipAddress='".$ipx."' WHERE Tanggal='".date("Y-m-d")."'");
      $_SESSION['MemberOnline']=date('Y-m-d H:i:s');
    }
  }
  $rs = $this->db->query('SELECT Jumlah AS Visitor FROM sys_traffic WHERE Tanggal="'.date("Y-m-d").'" LIMIT 1');
  if($rs->num_rows()>0){
    $visitor = $rs->row(0);
    $today = $visitor->Visitor;
  }else{
    $today = 0;
  }
  $strSQL = "SELECT Jumlah AS Visitor FROM sys_traffic WHERE
  Tanggal=(SELECT DATE_ADD(CURDATE(),INTERVAL -1 DAY) FROM sys_traffic LIMIT 1)
  LIMIT 1";
  $rs = $this->db->query($strSQL);
  if($rs->num_rows()>0){
    $visitor = $rs->row(0);
    $yesterday = $visitor->Visitor;
  }else{
    $yesterday = 0;
  }
  $rs = $this->db->query('SELECT SUM(Jumlah) as Total FROM sys_traffic');
  $visitor = $rs->row(0);
  $total = $visitor->Total;


  function num_toimage($tot,$jumlah){
    $pattern='';
    for($j=0;$j<$jumlah;$j++){
      $pattern .= '0';
    }
    $len     = strlen($tot);
    $length  = strlen($pattern)-$len;
    $start   = substr($pattern,0,$length).substr($tot,0,$len-1);
    $last    = substr($tot,$len-1,1);
    $last_rpc= '<img src="_BASE_URL_/assets/images/counter/animasi/'.$last.'.gif" align="absmiddle" />';
    $inc     = str_replace($last,$last_rpc,$last);
    for($i=0;$i<=9;$i++){
      $rpc ='<img src="_BASE_URL_/assets/images/counter/'.$i.'.gif" align="absmiddle"/>';
      $start=str_replace($i,$rpc,$start);
    }
    $num = $start.$inc;
    $num = str_replace('_BASE_URL_',base_url(),$num);
    return $num;
  }
  /*
  $today    = mysql_fetch_array(mysql_query('SELECT Jumlah AS Visitor FROM sys_traffic WHERE Tanggal="'.date("Y-m-d").'" LIMIT 1'));
  $yesterday  = mysql_fetch_array(mysql_query('SELECT Jumlah AS Visitor FROM sys_traffic WHERE Tanggal=(SELECT DATE_ADD(CURDATE(),INTERVAL -1 DAY) FROM sys_traffic LIMIT 1) LIMIT 1'));
  $total    = mysql_fetch_array(mysql_query('SELECT SUM(Jumlah) as Total FROM sys_traffic'));
  */
  ?>
    <div id="container" align="center">
      <table cellpadding="0" cellspacing="0" class="counter" width="100%">
      <tr>
        <td valign="middle" width="50%"> Hari ini</td>
        <td valign="middle" width="50%" align="right"><?= num_toimage($today,6); ?></td>
      </tr>
      <tr>
        <td valign="middle" height="20">Kemarin </td>
        <td valign="middle" align="right"><?= num_toimage($yesterday,6); ?></td>
      </tr>
      <tr>
        <td valign="middle" height="20">Jumlah Pengunjung</td>
        <td valign="middle" align="right"><?= num_toimage($total,6); ?></td>
      </tr>
      </table>
    </div>
  </div>
</div>
