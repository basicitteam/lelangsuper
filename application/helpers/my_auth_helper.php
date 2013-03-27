<?php
//helper autentikasi, buat cek udah login atau belum & yg login admin.
//by rogers dwiputra
function is_login()
{
	$CI =& get_instance();
	if($CI->session->userdata('logged_in') == TRUE)
	{
		return TRUE;
	}
	else
	{
		return FALSE;
	}
}

function is_admin()
{
	if(is_login()){
		$CI =& get_instance();
		if($CI->session->userdata('role') == 'admin')
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
}

function is_user()
{
	if(is_login()){
		$CI =& get_instance();
		if($CI->session->userdata('role') == 'user')
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	else
	{
		return FALSE;
	}
}

function is_banned($id_user){
	$CI =& get_instance();
	$user = $CI->M_user->get_user($id_user);
	if(time() > $user['tanggal_akhir']){
		return false;
	}
	else{
		return true;
	}
}

function chat_active(){
	$CI =& get_instance();
	if($CI->M_chat->get_setting() != 1){
		return false;
	}
	else{
		return true;
	}	
}