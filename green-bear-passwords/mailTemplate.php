<?php
$url = $_SERVER['REQUEST_URI'];
$res = explode('/', $url);
array_pop($res);
$url = implode('/', $res);

$postText =
"<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
</head>
<body>
<style>
	@font-face {
		font-family: 'CMHELLOILIKEYOUW01Bold';
		src: url('http://".$_SERVER[SERVER_NAME].$url."/fonts/CMH/CMHELLOILIKEYOUW01Bold.eot');
		src: url('http://".$_SERVER[SERVER_NAME].$url."/fonts/CMH/CMHELLOILIKEYOUW01Bold.eot') format('embedded-opentype'),
			url('http://".$_SERVER[SERVER_NAME].$url."/fonts/CMH/CMHELLOILIKEYOUW01Bold.woff2') format('woff2'),
			url('http://".$_SERVER[SERVER_NAME].$url."/fonts/CMH/CMHELLOILIKEYOUW01Bold.woff') format('woff'),
			url('http://".$_SERVER[SERVER_NAME].$url."/fonts/CMH/CMHELLOILIKEYOUW01Bold.ttf') format('truetype'),
			url('http://".$_SERVER[SERVER_NAME].$url."/fonts/CMH/CMHELLOILIKEYOUW01Bold.svg#CMHELLOILIKEYOUW01Bold') format('svg');
	}
	@font-face {
		font-family: 'MuseoSansCyrl300';
		src: url('http://".$_SERVER[SERVER_NAME].$url."/fonts/museo300/MuseoSansCyrl_0.eot');
		src: url('http://".$_SERVER[SERVER_NAME].$url."/fonts/museo300/MuseoSansCyrl_0.eot') format('embedded-opentype'),
			url('http://".$_SERVER[SERVER_NAME].$url."/fonts/museo300/MuseoSansCyrl_0.woff2') format('woff2'),
			url('http://".$_SERVER[SERVER_NAME].$url."/fonts/museo300/MuseoSansCyrl_0.woff') format('woff'),
			url('http://".$_SERVER[SERVER_NAME].$url."/fonts/museo300/MuseoSansCyrl_0.ttf') format('truetype'),
			url('http://".$_SERVER[SERVER_NAME].$url."/fonts/museo300/MuseoSansCyrl_0.svg#MuseoSansCyrl_0') format('svg');
	}
	@font-face {
		font-family: 'MuseoSansCyrl500';
		src: url('http://".$_SERVER[SERVER_NAME].$url."/fonts/museo500/MuseoSansCyrl_1.eot');
		src: url('http://".$_SERVER[SERVER_NAME].$url."/fonts/museo500/MuseoSansCyrl_1.eot') format('embedded-opentype'),
			url('http://".$_SERVER[SERVER_NAME].$url."/fonts/museo500/MuseoSansCyrl_1.woff2') format('woff2'),
			url('http://".$_SERVER[SERVER_NAME].$url."/fonts/museo500/MuseoSansCyrl_1.woff') format('woff'),
			url('http://".$_SERVER[SERVER_NAME].$url."/fonts/museo500/MuseoSansCyrl_1.ttf') format('truetype'),
			url('http://".$_SERVER[SERVER_NAME].$url."/fonts/museo500/MuseoSansCyrl_1.svg#MuseoSansCyrl_1') format('svg');
	}
	@font-face {
		font-family: 'MuseoSansCyrl700';
		src: url('http://".$_SERVER[SERVER_NAME].$url."/fonts/museo700/MuseoSansCyrl_2.eot');
		src: url('http://".$_SERVER[SERVER_NAME].$url."/fonts/museo700/MuseoSansCyrl_2.eot') format('embedded-opentype'),
			url('http://".$_SERVER[SERVER_NAME].$url."/fonts/museo700/MuseoSansCyrl_2.woff2') format('woff2'),
			url('http://".$_SERVER[SERVER_NAME].$url."/fonts/museo700/MuseoSansCyrl_2.woff') format('woff'),
			url('http://".$_SERVER[SERVER_NAME].$url."/fonts/museo700/MuseoSansCyrl_2.ttf') format('truetype'),
			url('http://".$_SERVER[SERVER_NAME].$url."/fonts/museo700/MuseoSansCyrl_2.svg#MuseoSansCyrl_2') format('svg');
	}
</style>
<body style='background-color: #fdfdfd'>
	<table border='0' cellpadding='0' cellspacing='0' style='width: 960px;margin:0 auto; padding:0'>
		<tr>
			<td><img style='padding-top: 25px;padding-bottom: 27px;'src='http://".$_SERVER[SERVER_NAME].$url."/images/css/logo.png' alt=''></td>
		</tr>
		<tr>
			<td>
				<table border='0' cellpadding='0' cellspacing='0' style='width: 960px;padding:0;padding-bottom: 35px;box-shadow: 0px 0px 45.39px 5.61px rgba(0, 0, 0, 0.09);'>
					<tr>
						<td style='padding-top: 60px;padding-left: 35px;'>
							<img src='http://".$_SERVER[SERVER_NAME].$url."/images/css/fom_image.png' alt='' width='375px' height='233px'>
						</td>
						<td style='padding-left: 38px;padding-right: 35px;'>
							<p style='text-transform: uppercase;font-family: CMHELLOILIKEYOUW01Bold;font-size: 36px'>
								thanks for downloading the ebook<br>
								<img style='display: block;margin: auto;margin-top:16px;' src='http://".$_SERVER[SERVER_NAME].$url."/images/css/bg_title_line.png' alt=''>
							</p>
							<p style='color: #006d55;font-size: 20px;font-family: MuseoSansCyrl700'>
								You can find the Survival Guide e-book from Kaspersky Lab in attach.
							</p>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td style='padding-top: 38px;'>
				<table cellpadding='0' cellspacing='0' style='width: 960px; padding:0;'>
					<tbody>
						<tr>
							<td style='width:50%;vertical-align: top;'>
								<img src='http://".$_SERVER[SERVER_NAME].$url."/images/css/logo_footer.png' alt=''>
								<p style='color: #8d8d8d;font-size:12px;font-family: Aril;text-align:left;'>
									© 2018 AO Kaspersky Lab. All rights reserved.<br>
									Registered trademarks and service marks are the property of their respective owners.
								</p>
							</td>
							<td style='width:50%;vertical-align: top;'>
								<p style='margin-top: 0;padding-top: 0;color: #c5171e;font-family: MuseoSansCyrl700;font-size: 15px;text-align:right;'>
									<a href='https://me-en.kaspersky.com' style='color: #8f8f8f;text-decoration: none;'>To Kaspersky Lab website</a>
								</p>
								<p style='color: #8f8f8f;font-size: 13px;font-family: MuseoSansCyrl300;text-align:right;'><a href='https://me-en.kaspersky.com/privacy' style='color: #8f8f8f;text-decoration: none;'>Privacy Policy</a> <a style='color: #8f8f8f;text-decoration: none;' href='https://me-en.kaspersky.com/about/contact'>Contact us</a></p>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>";