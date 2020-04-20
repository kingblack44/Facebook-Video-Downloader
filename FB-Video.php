<?php
function curl($url) {
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_5; en-US) AppleWebKit/534.13 (KHTML, like Gecko) Chrome/9.0.597.15 Safari/534.13");
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    $content = curl_exec($curl);
    curl_close($curl);
    return $content;
}
system("clear");
echo "
\033[1;37m   █████████
\033[1;37m   █▄█████▄█\033[1;36m  ╔═══╦══╗─╔╗──╔╦══╦═══╦═══╦═══╗
\033[1;37m   █\033[1;31m▼▼▼▼▼\033[1;36m     ║╔══╣╔╗║─║╚╗╔╝╠╣╠╩╗╔╗║╔══╣╔═╗║
\033[1;37m   █\033[1;36m- -- - ---\033[1;36m║╚══╣╚╝╚╗╚╗║║╔╝║║─║║║║╚══╣║─║║
\033[1;37m   █\033[1;31m▲▲▲▲▲\033[1;36m     ║╔══╣╔═╗║─║╚╝║─║║─║║║║╔══╣║─║║
\033[1;37m   █████████\033[1;36m  ║║──║╚═╝║─╚╗╔╝╔╣╠╦╝╚╝║╚══╣╚═╝║
\033[1;37m    ██ ██\033[1;36m     ╚╝──╚═══╝──╚╝─╚══╩═══╩═══╩═══╝
\033[1;31m  ╭═══════════════════════════════════════════════════╮
\033[1;35m•\033[1;31m─║>\033[1;32m Author : \033[1;33mAriel Sandy Permana [ TAMPAN ]          \033[1;31m║─\033[1;35m•
\033[1;31m  ║>\033[1;32m YouTube : \033[1;33mAriel 69 Channel                       \033[1;31m║
\033[1;31m  ║>\033[;36m Tools Name : \033[1;32mFacebook Video Downloader \033[1;90mNew       \033[1;31m║
\033[1;31m  ║>\033[;36m Tools Version : \033[1;32m0.5 \033[1;90mNew                          \033[1;31m║
\033[1;35m•\033[1;31m─║>\033[1;32m Facebook : \033[1;33mCorona                                \033[1;31m║─\033[1;35m•
\033[1;31m  ╰╬══════════════════════════════════════════════════╯";
echo "      ╠ \033[1;36mMasukan URL Video Facebook";
echo "      \n\033[1;31m   ╠═══≽ \033[1;33m";
$v = trim(fgets(STDIN, 1024));
echo "   \033[1;31m╠ \033[1;36mMasukan Nama Video Yang Mau Di Save";
echo " \n\033[1;31m   ╠═══≽ \033[1;36m";
$name = trim(fgets(STDIN, 1024));
$url = str_replace('www', 'mbasic', $v);
$s = curl($url);
//echo $s;
$vurl = preg_match('/<a href=\"\/video_redirect\/\?src\=(.*?)\"/ims', $s, $matches) ? $matches[1] : null;
$vu = urldecode($vurl);
echo "\033[1;31m   ╠ \033[1;35m[+] \033[1;32mDownloading...";
$d = 'wget -O "' . $name . '.mp4" --user-agent="Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.6 (KHTML, like Gecko) Chrome/20.0.1092.0 Safari/536.6" "' . $vu . '" -q --show-progress';
system($d);
echo "\n\033[1;35m   [+] \033[1;32mVideo Tersimpan Dengan Nama : " . $name . "\033[1;36m.mp4\n";
echo "\033[1;35m   [+] \033[1;32mSilahkan Cek Di Galeri/Video\n";
exit(0);
?>
