<?php 
function get_title()
{
	$viewinfo = $this->db->select('*')->from('qh_website')->where('id',1)->get()->row_array();
		$info = json_decode($viewinfo['seo']);
		echo $info->{'title'};
}
?>