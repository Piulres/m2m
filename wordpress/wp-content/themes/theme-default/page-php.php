<?php /* Template Name: PHP */ ?>
<pre><code>
<?php
	
	// phpinfo();

	// Basic Web Crawler
	
		// include_once("simple_html_dom.php");
		// $target_url = "http://renan.zz.mu/";
		// $html = new simple_html_dom();
		// $html->load_file($target_url);
		// foreach($html->find("a") as $link){
		//  echo $link->href."<br />";
		// }

	// Web Crawler - Example 1 

		// include("simple_html_dom.php");
		// $crawled_urls=array();
		// $found_urls=array();
		// function rel2abs($rel, $base){
		//  if (parse_url($rel, PHP_URL_SCHEME) != '') return $rel;
		//  if ($rel[0]=='#' || $rel[0]=='?') return $base.$rel;
		//  extract(parse_url($base));
		//  $path = preg_replace('#/[^/]*$#', '', $path);
		//  if ($rel[0] == '/') $path = '';
		//  $abs = "$host$path/$rel";
		//  $re = array('#(/\.?/)#', '#/(?!\.\.)[^/]+/\.\./#');
		//  for($n=1; $n>0;$abs=preg_replace($re,'/', $abs,-1,$n)){}
		//  $abs=str_replace("../","",$abs);
		//  return $scheme.'://'.$abs;
		// }
		// function perfect_url($u,$b){
		//  $bp=parse_url($b);
		//  if(($bp['path']!="/" && $bp['path']!="") || $bp['path']==''){
		//   if($bp['scheme']==""){$scheme="http";}else{$scheme=$bp['scheme'];}
		//   $b=$scheme."://".$bp['host']."/";
		//  }
		//  if(substr($u,0,2)=="//"){
		//   $u="http:".$u;
		//  }
		//  if(substr($u,0,4)!="http"){
		//   $u=rel2abs($u,$b);
		//  }
		//  return $u;
		// }
		// function crawl_site($u){
		//  global $crawled_urls;
		//  $uen=urlencode($u);
		//  if((array_key_exists($uen,$crawled_urls)==0 || $crawled_urls[$uen] < date("YmdHis",strtotime('-25 seconds', time())))){
		//   $html = file_get_html($u);
		//   $crawled_urls[$uen]=date("YmdHis");
		//   foreach($html->find("a") as $li){
		//    $url=perfect_url($li->href,$u);
		//    $enurl=urlencode($url);
		//    if($url!='' && substr($url,0,4)!="mail" && substr($url,0,4)!="java" && array_key_exists($enurl,$found_urls)==0){
		// 	$found_urls[$enurl]=1;
		// 	echo "<li><a target='_blank' href='".$url."'>".$url."</a></li>";
		//    }
		//   }
		//  }
		// }
		// crawl_site("http://renan.zz.mu");

	// Web Crawler - Example 2

		// include_once("simple_html_dom.php");
		// $html = file_get_html('http://www.naosalvo.com.br/');

		// foreach($html->find('#posts article') as $article) {

		//     // $item['title']        = $article->find('.title-post', 0)->plaintext;
		//     // $item['intro']        = $article->find('.content-post', 0)->plaintext;
		//     $item['img0'][0]          = $article->find('.content-post p img',0)->src;
		//     $item['img1'][1]          = $article->find('.content-post p img',1)->src;
		//     $item['img2'][2]          = $article->find('.content-post p img',2)->src;
		//     $item['img3'][3]          = $article->find('.content-post p img',3)->src;
		//     $item['img4'][4]          = $article->find('.content-post p img',4)->src;
		//     $item['img5'][5]          = $article->find('.content-post p img',5)->src;
		//     $item['texto']        = $article->find('.content-post p', 0)->plaintext;

		//     $articles[] = $item;

		//     // $html->clear();
		// }

		// print_r($articles);

		// $jaja = $articles[2]['img1'][1];
		// print_r($jaja);

		// Register Post Data
		// $post = array();
		// $post['post_status']   = 'publish';
		// $post['post_type']     = 'post'; // can be a CPT too
		// $post['post_title']    = 'My New Post';
		// $post['post_content']  = 'My new post content';
		// $post['post_author']   = 1;

		// // Create Post
		// $post_id = wp_insert_post( $post );

		// // Add Featured Image to Post
		// $image_url        = $jaja;
		// $image_name       = 'wp-header-logo.png';
		// $upload_dir       = wp_upload_dir(); // Set upload folder
		// $image_data       = file_get_contents($image_url); // Get image data
		// $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); // Generate unique name
		// $filename         = basename( $unique_file_name ); // Create image file name

		// // Check folder permission and define file location
		// if( wp_mkdir_p( $upload_dir['path'] ) ) {
		//     $file = $upload_dir['path'] . '/' . $filename;
		// } else {
		//     $file = $upload_dir['basedir'] . '/' . $filename;
		// }

		// // Create the image  file on the server
		// file_put_contents( $file, $image_data );

		// // Check image file type
		// $wp_filetype = wp_check_filetype( $filename, null );

		// // Set attachment data
		// $attachment = array(
		//     'post_mime_type' => $wp_filetype['type'],
		//     'post_title'     => sanitize_file_name( $filename ),
		//     'post_content'   => '',
		//     'post_status'    => 'inherit'
		// );

		// // Create the attachment
		// $attach_id = wp_insert_attachment( $attachment, $file, $post_id );

		// // Include image.php
		// require_once(ABSPATH . 'wp-admin/includes/image.php');

		// // Define attachment metadata
		// $attach_data = wp_generate_attachment_metadata( $attach_id, $file );

		// // Assign metadata to attachment
		// wp_update_attachment_metadata( $attach_id, $attach_data );

		// // And finally assign featured image to post
		// set_post_thumbnail( $post_id, $attach_id );

?>
</code></pre>