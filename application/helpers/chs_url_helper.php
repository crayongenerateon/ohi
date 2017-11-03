<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Function Pretty Date
 *
 * 
 *
 * @access	public
 * @param	type	name
 * @return	type	
 */
if (!function_exists('pretty_date')) {

    function pretty_date($date = '', $format = '', $timezone = FALSE) {
        if ($date == '0000-00-00 00:00:00' OR empty($date)) {
            return '';
        }

        $date_str = strtotime($date);

        if (empty($format)) {
            $date_pretty = date('l, d/m/Y H:i', $date_str);
        } else {
            $date_pretty = date($format, $date_str);
        }

        if ($timezone) {
            $date_pretty .= ' WIB';
        }

        $date_pretty = str_replace('Sunday', 'Minggu', $date_pretty);
        $date_pretty = str_replace('Monday', 'Senin', $date_pretty);
        $date_pretty = str_replace('Tuesday', 'Selasa', $date_pretty);
        $date_pretty = str_replace('Wednesday', 'Rabu', $date_pretty);
        $date_pretty = str_replace('Thursday', 'Kamis', $date_pretty);
        $date_pretty = str_replace('Friday', 'Jumat', $date_pretty);
        $date_pretty = str_replace('Saturday', 'Sabtu', $date_pretty);

        $date_pretty = str_replace('January', 'Januari', $date_pretty);
        $date_pretty = str_replace('February', 'Februari', $date_pretty);
        $date_pretty = str_replace('March', 'Maret', $date_pretty);
        $date_pretty = str_replace('April', 'April', $date_pretty);
        $date_pretty = str_replace('May', 'Mei', $date_pretty);
        $date_pretty = str_replace('June', 'Juni', $date_pretty);
        $date_pretty = str_replace('July', 'Juli', $date_pretty);
        $date_pretty = str_replace('August', 'Agustus', $date_pretty);
        $date_pretty = str_replace('September', 'September', $date_pretty);
        $date_pretty = str_replace('October', 'Oktober', $date_pretty);
        $date_pretty = str_replace('November', 'November', $date_pretty);
        $date_pretty = str_replace('December', 'Desember', $date_pretty);

        return $date_pretty;
    }

}

/**
 * Function Nav Collapse
 *
 * 
 *
 * @access	public
 * @param	type	name
 * @return	type	
 */
if (!function_exists('nav_collapse')) {

    function nav_collapse($current_url) {
        $CI = & get_instance();
        $uri = $CI->uri->segment(2);

        if ($uri === $current_url) {
            return 'in';
        } else {
            return null;
        }
    }

}

/**
 * user_public_file_url
 *
 * 
 *
 * @access	public
 * @param	type	name
 * @return	type	
 */
if (!function_exists('user_public_file_url')) {

    function user_public_file_url($params = '') {
        return base_url('uploads/user_public/' . $params);
    }

}

/**
 * Function Name
 *
 * Function description
 *
 * @access	public
 * @param	type	name
 * @return	type	
 */
if (!function_exists('hukum_url')) {

    function hukum_url($hukum = array()) {
        if (isset($hukum['date_created'])) {
            list($date, $time) = explode(' ', $hukum['date_created']);
            list($tahun, $bulan, $tanggal) = explode('-', $date);
        }
        return site_url('hukum/read/' . $tahun . '/' . $bulan . '/' . $tanggal . '/' . $hukum['hukum_id'] . '/' . url_title($hukum['hukum_title']) . '.html');
    }

}

/**
 * Function Name
 *
 * Function description
 *
 * @access	public
 * @param	type	name
 * @return	type	
 */
if (!function_exists('team_file_url')) {

    function team_file_url($param = '') {
        return base_url('uploads/team/' . $param);
    }

}

/**
 * Function Name
 *
 * Function description
 *
 * @access	public
 * @param	type	name
 * @return	type	
 */
if (!function_exists('image_url')) {

    function image_url($params = '') {
        return base_url('uploads/' . $params);
    }

}

if (!function_exists('slideshow_url')) {

    function slideshow_url($params = '') {
        return $params;
    }

}

if (!function_exists('gallery_url')) {

    function gallery_url($gallery = array()) {
        return site_url('gallery/view/' . $gallery['gallery_id'] . '/' . url_title($gallery['gallery_title']) . '.html');
    }

}

if (!function_exists('team_url')) {

    function team_url($team = array()) {
        return site_url('team/view/' . $team['team_id'] . '/' . url_title($team['team_name']) . '.html');
    }

}

if (!function_exists('publication_url')) {

    function publication_url($publication = array()) {
        if (isset($publication['date_created'])) {
            list($date, $time) = explode(' ', $publication['date_created']);
            list($tahun, $bulan, $tanggal) = explode('-', $date);
        }
        return site_url('publication/read/' . $tahun . '/' . $bulan . '/' . $tanggal . '/' . $publication['publication_id'] . '/' . url_title($publication['publication_title']) . '.html');
    }

}

if ( ! function_exists('event_url')) {
    function event_url($event = array())
    {
        if (isset($event['date_created'])) {
            list($date, $time) = explode(' ', $event['date_created']);
            list($tahun, $bulan, $tanggal) = explode('-', $date);
        }
        return site_url('event/read/'.$tahun.'/'.$bulan.'/'.$tanggal.'/'.$event['event_id'].'/'. url_title($event['event_name']).'.html');
    }
}

if (!function_exists('menu_url')) {

    function menu_url($menu = array()) {
        if (stristr($menu['url'], '://') !== FALSE) {
            return $menu['url'];
        }

        return site_url($menu['url']);
    }

}

if (!function_exists('page_tree_url_to_page_edit_url')) {

    function page_tree_url_to_page_edit_url($page = array()) {
        $status = is_page($page);

        if ($status) {
            list($page, $id) = explode('/', $page['url']);
            return site_url('manage/page/edit/' . $id);
        }

        return '#';
    }

}

if (!function_exists('is_page')) {

    function is_page($page = array()) {
        return (stristr($page['url'], 'page/') === FALSE) ? FALSE : TRUE;
    }

}

if (!function_exists('page_url')) {

    function page_url($page = array()) {
        return site_url('page/' . $page['page_id'] . '/' . url_title($page['page_name'], '-', TRUE) . '.html');
    }

}

/**
 * Function Name
 *
 * Function description
 *
 * @access	public
 * @param	type	name
 * @return	type	
 */
if (!function_exists('complaint_file_url')) {

    function complaint_file_url($param = array()) {
        return base_url('documents/complaint/' . $param['complaint_id'] . '/' . $param['files_name']);
    }

}

/**
 * Function Name
 *
 * Function description
 *
 * @access	public
 * @param	type	name
 * @return	type	
 */
if (!function_exists('response_file')) {

    function response_file($param = array()) {

    }

}

/**
 * Function Name
 *
 * Function description
 *
 * @access	public
 * @param	type	name
 * @return	type	
 */
if (!function_exists('verifikasi_pelapor_files_url')) {

    function verifikasi_pelapor_files_url($param = array()) {
        return base_url('documents/complaint/' . $param['complaint_id'] . '/verifikasi_pelapor/' . $param['files_name']);
    }

}


/**
 * Function Name
 *
 * Function description
 *
 * @access	public
 * @param	type	name
 * @return	type	
 */
if (!function_exists('verifikasi_unit_terkait_files_url')) {

    function verifikasi_unit_terkait_files_url($param = array(), $complaint_id = NULL) {
        return base_url('documents/complaint/' . $complaint_id . '/verifikasi_unit_terkait/' . $param['files_name']);
    }

}


if (!function_exists('verifikasi_terlapor_files_url')) {

    function verifikasi_terlapor_files_url($param = array()) {
        return base_url('documents/complaint/' . $param['complaint_id'] . '/verifikasi_terlapor/' . $param['files_name']);
    }

}

/**
 * Function Name
 *
 * Function description
 *
 * @access	public
 * @param	type	name
 * @return	type	
 */
if (!function_exists('mediation_files_url')) {

    function mediation_files_url($complaint_id, $name) {
        return base_url('documents/complaint/' . $complaint_id . '/mediation/' . $name);
    }

}

if (!function_exists('recomendation_files_url')) {

    function recomendation_files_url($param = array()) {
        return base_url('documents/complaint/' . $param['complaint_id'] . '/recomendation/' . $param['files_name']);
    }

}

if (!function_exists('monitor_files_url')) {

    function monitor_files_url($param = array()) {
        return base_url('documents/complaint/' . $param['complaint_id'] . '/monitor/' . $param['files_name']);
    }

}

/**
 * Function Name
 *
 * Function description
 *
 * @access	public
 * @param	type	name
 * @return	type	
 */
if (!function_exists('active_navbar_user')) {

    function active_navbar_user($current_url = '', $uri = 2) {
        $CI = & get_instance();
        if ($uri = 2) {
            $uri = $CI->uri->segment(2);
        } else {
            $uri = $CI->uri->segment(3);
        }

        if ($uri == $current_url) {
            return 'active';
        } else {
            return null;
        }
    }

}

/**
 * Function Name
 *
 * Function description
 *
 * @access	public
 * @param	type	name
 * @return	type	
 */
if (!function_exists('user_file_url')) {

    function user_file_url($name = '') {
        return base_url('uploads/user_public/' . $name);
    }

}

/**
 * Function Name
 *
 * Function description
 *
 * @access	public
 * @param	type	name
 * @return	type	
 */
if (!function_exists('complaint_url')) {

    function complaint_url($param = array()) {
        return site_url('complaint/read/' . $param['complaint_id'] . '/' . url_title($param['complaint_title']));
    }

}

/**
 * Function Name
 *
 * Function description
 *
 * @access	public
 * @param	type	name
 * @return	type	
 */
if (!function_exists('news_url')) {

    function news_url($news = array()) {
        if (isset($news['news_post_date'])) {
            list($date, $time) = explode(' ', $news['news_post_date']);
            list($tahun, $bulan, $tanggal) = explode('-', $date);
        }
        return site_url('news/read/' . $tahun . '/' . $bulan . '/' . $tanggal . '/' . $news['news_id'] . '/' . url_title($news['news_title']) . '.html');
    }

}

/**
 * Function Name
 *
 * Function description
 *
 * @access	public
 * @param	type	name
 * @return	type	
 */
if (!function_exists('publication_file_url')) {

    function publication_file_url($param = '') {
        return base_url('uploads/publication/' . $param);
    }

}

if (!function_exists('instruction_file_url')) {

    function instruction_file_url($complaint_id = '', $instruction = array()) {
        $base_path = 'documents/complaint/' . $complaint_id . '/instruction/';
        return base_url($base_path . $instruction['files_name']);
    }

}

if ( ! function_exists('hukum_file_url'))
{
    function hukum_file_url($params = array())
    {
        return base_url('uploads/hukum/'.$params['hukum_file']);
    }
}

if (!function_exists('media_url')) {
    function media_url($name = '') {
        $CI = & get_instance();
        $media_url = $CI->config->item('media_url');

        if ($media_url != '-') {
            return $media_url . $name;
        } else {
            return base_url($name);
        }
    }
}

/**
 * Function Name
 *
 * Function description
 *
 * @access    public
 * @param    type    name
 * @return    type    
 */

if (! function_exists('substr_and_striptags'))
{
    function substr_and_striptags($string = '', $offset = 0, $limit = 100)
    {
        return substr(strip_tags($string), $offset, $limit);
    }
}

/**
 * Function Name
 *
 * Function description
 *
 * @access    public
 * @param    type    name
 * @return    type    
 */

if (! function_exists('get_current_romawi_month'))
{
    function get_current_romawi_month()
    {
        $month = date('n');
        switch ($month) {
            case 1:
            $ret = 'I';
            break;
            case 2:
            $ret = 'II';
            break;
            case 3:
            $ret = 'III';
            break;
            case 4:
            $ret = 'IV';
            break;
            case 5:
            $ret = 'V';
            break;
            case 6:
            $ret = 'VI';
            break;
            case 7:
            $ret = 'VII';
            break;
            case 8:
            $ret = 'VIII';
            break;
            case 9:
            $ret = 'IX';
            break;
            case 10:
            $ret = 'X';
            break;
            case 11:
            $ret = 'XI';
            break;
            
            default:
            $ret = 'XII';
            break;
        }

        return $ret;
    }
}


/* End of file Url_helper.php */
/* Location: ./application/helpers/Url_helper.php */