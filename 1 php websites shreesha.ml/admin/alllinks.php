<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
  header("location:login.php");
  exit;
}
?>       
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>full links</title>
  </head>
<body><?php include('header.php'); ?>
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search">
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<h1 id="table">Table of links to links</h1>
<ol>
<h3 id="myUL">
  <li><a href="#hod links">hod links</a></li>
  <li><a href="#learnAIML">learn AIML and Programing basics</a></li>
  <li><a href="#runners">runners compiler all language</a></li>
  <li><a href="#notebook">notebooks runner</a></li>
  <li><a href="#w3">w3 school learn and code</a></li>
  <li><a href="#readingbestall">reading best all languages</a></li>
  <li><a href="#otherlearn">other learn and code</a></li>
  <li><a href="#semvideos">all semester physics chemistry cycle </a></li>
  <li><a href="#songs">songs music</a></li>
  <li><a href="#library books">library books</a></li>
  <li><a href="#online deployment">online deployment and free hosting</a></li>
  <li><a href="#movies">songs musics movies serials(hotstar etc)</a></li>
  <li><a href="#online desktops">online desktops and android mobile online ubuntu</a></li>
  <li><a href="#english">english errors in sentences sumarizing and paramaking tools</a></li>
  <li><a href="#validator">html css java php validators</a></li>
  <li><a href="#create websites and apps">create websites and apps</a></li>
  <li><a href="#5minwebsite">fast 5 minutes website</a></li>
  <li><a href="#dark web">dark web</a></li>
  <li><a href="#free storages">free storages links</a></li>
  <li><a href="#pptsedit">ppts and website editing</a></li>
  <li><a href="#pdfshortlink">pdf & shortlink</a></li>
  <li><a href="#otherlink12">other links</a></li>
  <li><a href="#peg words">peg words</a></li>
  <li><a href="#best machine learning">An important collection of the 15 best machine learning cheat sheets</a></li>
  <li><a href="#online projects">source codes , ideas of AIML and other source codes projects</a></li>
  <li><a href="#virtual box">virtual box and other many links</a></li>
  <li><a href="#phpprojects">php projects with source codes</a></li>
  <li><a href="#Python projets link">Python projets link with source codes</a></li>
  <li><a href="#java-script-nodejs">javascript-nodejs projects</a></li>
  <li><a href="#download youtube">download youtube videos and mp3 videos</a></li>
<!--  <li><a href="#"></a></li>  -->
  <li><a href="#major-cloud-providers">Major Cloud Providers’ Always-Free Limits</a></li>
  <li><a href="#cloud-management-solutions">Cloud management solutions</a></li>
  <li><a href="#analytics-events-and-statistics">Analytics, Events and Statistics</a></li>
  <li><a href="#apis-data-and-ml">APIs, Data and ML</a></li>
  <li><a href="#artifact-repos">Artifact Repos</a></li>
  <li><a href="#baas">BaaS</a></li>
  <li><a href="#cdn-and-protection">CDN and Protection</a></li>
  <li><a href="#ci-and-cd">CI and CD</a></li>
  <li><a href="#cms">CMS</a></li>
  <li><a href="#code-quality">Code Quality</a></li>
  <li><a href="#code-search-and-browsing">Code Search and Browsing</a></li>
  <li><a href="#crash-and-exception-handling">Crash and Exception Handling</a></li>
  <li><a href="#data-visualization-on-maps">Data Visualization on Maps</a></li>
  <li><a href="#dbaas">DBaaS</a></li>
  <li><a href="#design-and-ui">Design and UI</a></li>
  <li><a href="#design-inspiration">Design Inspiration</a></li>
  <li><a href="#dev-blogging-sites">Dev Blogging Sites</a></li>
  <li><a href="#dns">DNS</a></li>
  <li><a href="#docker-related">Docker Related</a></li>
  <li><a href="#email">Email gmail</a></li>
  <li><a href="#font">Font</a></li>
  <li><a href="#forms">Forms</a></li>
  <li><a href="#iaas">IaaS</a></li>
  <li><a href="#ide-and-code-editing">IDE and Code Editing</a></li>
  <li><a href="#international-mobile-number-verification-api-and-sdk">International Mobile Number Verification API and SDK</a></li>
  <li><a href="#issue-tracking-and-project-management">Issue Tracking and Project Management</a></li>
  <li><a href="#log-management">Log Management</a></li>
  <li><a href="#management-system">Management Systems</a></li>
  <li><a href="#messaging-and-streaming">Messaging and Streaming</a></li>
  <li><a href="#miscellaneous">Miscellaneous</a></li>
  <li><a href="#monitoring">Monitoring</a></li>
  <li><a href="#paas">PaaS</a></li>
  <li><a href="#package-build-system">Package Build System</a></li>
  <li><a href="#payment-and-billing-integration">Payment and Billing Integration</a></li>
  <li><a href="#privacy-management">Privacy Management</a></li>
  <li><a href="#screenshot-apis">Screenshot APIs</a></li>
  <li><a href="#search">Search</a></li>
  <li><a href="#security-and-pki">Security and PKI</a></li>
  <li><a href="#source-code-repos">Source Code Repos</a></li>
  <li><a href="#storage-and-media-processing">Storage and Media Processing</a></li>
  <li><a href="#tunneling-webrtc-web-socket-servers-and-other-routers">Tunneling, WebRTC, Web Socket Servers and Other Routers</a></li>
  <li><a href="#testing">Testing</a></li>
  <li><a href="#tools-for-teams-and-collaboration">Tools for Teams and Collaboration</a></li>
  <li><a href="#translation-management">Translation Management</a></li>
  <li><a href="#vagrant-related">Vagrant Related</a></li>
  <li><a href="#visitor-session-recording">Visitor Session Recording</a></li>
  <li><a href="#web-hosting">Web Hosting</a></li>
  <li><a href="#commenting-platforms">Commenting Platforms</a></li>
  <li><a href="#browser-based-hardware-emulation-written-in-javascript">Browser based hardware emulation</a></li>
  <li><a href="#remote-desktop-tools">Remote Desktop Tools</a></li>
  <li><a href="#other-free-resources">Other Free Resources</a></li>
</h3>
</ol>
<!-- <button onclick="sortList('id01')">Sort</button> -->
<h2 id="free storages"> free storages </h2>
<pre><ol>
<li>https://mega.nz/    30-50gb  (1)</li>
<li>https://www.pcloud.com/  10-20gb</li>
<li>https://www.mediafire.com/   10- 50gb</li>
<li>https://account.box.com/signup/n/personal  10gb</li>
<li>https://www.microsoft.com/en-us/microsoft-365/onedrive/compare-onedrive-plans  5gb</li>
<li>https://degoo.com/    500 gb   </li>
<li>https://drive.google.com/drive/my-drive 15gb</li>
<li>https://disk.yandex.com/  10gb</li>
<li>https://www.sync.com/ 5gb </li>
<li>https://www.blomp.com/ 20gb  (1)</li>
<li>https://letsupload.io/        unlimited(11.4) for 30 days then download it again then 30days like that\</li>
<li>https://icloud.com/   5gb</li>
<li>https://mediafire.com/  10gb</li>
<li>https://www.box.com/   10 gb</li>
<li>https://www.pcloud.com 10 gb</li>
<li>https://www.sync.com/ 5gb</li>
<li>https://www.idrive.com/ 5gb</li>
<li>https://www.amazon.com/clouddrive  5gb</li>
<li>https://nextcloud.com/ 2-8gb</li>
<li>https://icedrive.net/ 10gb</li>
<li>https://hubic.com   25gb</li>
<li>https://www.syncplicity.com/  10gb</li>
<li>https://trainbit.com/ 20gb</li>
<li>https://www.jottacloud.com/ 5gb</li>
<li>https://www.bitrix24.com/  5gb</li>
<li>https://koofr.eu/  10gb</li>
<li>http://www.mimedia.com/ 10gb</li>
<li>https://www.dubox.com/  1 tb</li>
</ol></pre>
<br>
<h2 id="pdfshortlink">pdf & shortlink speed test</h2>
<ol><pre>
<li><a href="https://www.protectedtext.com/"> fast best save not (protectedtext.com)</a> </li>
<li><a href="https://ufile.io/"> ufile.io (fast save file)</a> </li>
<li><a href="https://www.compresss.com/compress-m4a.html">compress best compressor</a></li>
<li><a href="https://www.ilovepdf.com/">ilovepdf best converter</a></li>
<li><a href="https://www.hipdf.com/">hipdf best converter</a></li>
<li><a href="https://www.onlineocr.net/">best OCR</a></li>
<li><a href="https://www.att.com/support/speedtest">speed test</a></li>
<li><a href="https://storelink.club/">storelink.club( store link ,upload document)</a></li>
<li>bit.ly</li>
<li>cutt.ly</li>
<li>is.gd</li>
<li>bit.do</li>
<li>protectedtext.com    (Multiple Link Protector)</li>
</pre></ol>
<br>
<h2 id="best machine learning">An important collection of the 15 best machine learning cheat sheets</h2>
<ol><pre>
<li><a href="https://github.com/afshinea/stanford-cs-229-machine-learning/blob/master/en/cheatsheet-supervised-learning.pdf">Supervised Learning</a></li>
<li><a href="https://github.com/afshinea/stanford-cs-229-machine-learning/blob/master/en/cheatsheet-unsupervised-learning.pdf">Unsupervised Learning</a></li>
<li><a href="https://github.com/afshinea/stanford-cs-229-machine-learning/blob/master/en/cheatsheet-deep-learning.pdf">Deep Learning</a></li>
<li><a href="https://github.com/afshinea/stanford-cs-229-machine-learning/blob/master/en/cheatsheet-machine-learning-tips-and-tricks.pdf">Machine Learning Tips and Tricks</a></li>
<li><a href="https://github.com/afshinea/stanford-cs-229-machine-learning/blob/master/en/refresher-probabilities-statistics.pdf">Probabilities and Statistics</a></li>
<li><a href="https://github.com/afshinea/stanford-cs-229-machine-learning/blob/master/en/super-cheatsheet-machine-learning.pdf">Comprehensive Stanford Master Cheat Sheet</a></li>
<li><a href="https://github.com/afshinea/stanford-cs-229-machine-learning/blob/master/en/refresher-algebra-calculus.pdf">Linear Algebra and Calculus</a></li>
<li><a href="https://s3.amazonaws.com/assets.datacamp.com/blog_assets/PythonForDataScience.pdf">Data Science Cheat Sheet</a></li>
<li><a href="https://s3.amazonaws.com/assets.datacamp.com/blog_assets/Keras_Cheat_Sheet_Python.pdf">Keras Cheat Sheet</a></li>
<li><a href="https://github.com/rstudio/cheatsheets/raw/master/keras.pdf">Deep Learning with Keras Cheat Sheet</a></li>
<li><a href="http://www.asimovinstitute.org/wp-content/uploads/2016/09/neuralnetworks.png">Visual Guide to Neural Network Infrastructures</a></li>
<li><a href="https://s3.amazonaws.com/assets.datacamp.com/blog_assets/Scikit_Learn_Cheat_Sheet_Python.pdf">Skicit-Learn Python Cheat Sheet</a></li>
<li><a href="https://scikit-learn.org/stable/tutorial/machine_learning_map/">Scikit-learn Cheat Sheet: Choosing the Right Estimator</a></li>
<li><a href="https://github.com/kailashahirwar/cheatsheets-ai/blob/master/PDFs/Tensorflow.pdf">Tensorflow Cheat Sheet</a></li>
<li><a href="https://www.cheatography.com/lulu-0012/cheat-sheets/test-ml/pdf/">Machine Learning Test Cheat Sheet - 1</a></li>
<li><a href="https://t.me/MachineLearning_Programming">Machine Learning Test Cheat Sheet - 2</a></li>
</pre></ol>
<br>
<h2 id="dark web">dark web</h2>
<ol><pre>
<li><a href="https://darkweblink.com/deep-web-links/">https://darkweblink.com/deep-web-links/</a></li>
<li><a href="https://darkweblink.com/dark-web-onion-links/">https://darkweblink.com/dark-web-onion-links/</a></li>
</pre></ol>
<br>
<h2 id="5minwebsite">fast 5 minutes website</h2>
<ol><pre>
<li><a href="https://tailwindcss.com/docs/installation">https://tailwindcss.com/docs/installation</a></li>
<li><a href="https://tailblocks.cc/">https://tailblocks.cc/</a></li>
<li><a href="https://blocks.wickedtemplates.com/">https://blocks.wickedtemplates.com/</a></li>
<li><a href="https://w3layouts.com/">https://w3layouts.com/</a></li>
<li><a href="https://source.unsplash.com/">https://source.unsplash.com/</a></li>
<li><a href="https://www.youtube.com/watch?v=TSRtBISvsh4">https://www.youtube.com/watch?v=TSRtBISvsh4</a></li>
<li><a href="https://lokeshdhakar.com/projects/lightbox2/">https://lokeshdhakar.com/projects/lightbox2/</a></li>
<li><a href="https://www.imgonline.com.ua/eng/resize-image.php">images https://www.imgonline.com.ua/eng/resize-image.php</a></li>
<li><a href="https://www.imgonline.com.ua/eng/enlarge-image.php">imgonline enlarged</a></li>
<li>https://www.learnwithpassion.me/2021/03/edu-email-how-to-create-edu-email.html     vcasection@gmail.com</li></ol><ul>
<li>https://www.codewithharry.com/blogpost/html-cheatsheet</li>
<li>https://www.codewithharry.com/blogpost/css-cheatsheet</li>
<li>https://www.codewithharry.com/blogpost/javascript-cheatsheet</li>
<li>https://www.codewithharry.com/blogpost/php-cheatsheet</li>
<li>https://www.codewithharry.com/blogpost/python-cheatsheet</li>
<li>https://www.codewithharry.com/blogpost/c-cheatsheet</li>
<li>https://www.codewithharry.com/blogpost/cpp-cheatsheet</li>
<li>https://www.codewithharry.com/blogpost/java-cheatsheet</li>
<li>https://www.codewithharry.com/blogpost/django-cheatsheet</li>
<li>https://www.codewithharry.com/blogpost/flask-cheatsheet</li>
<li>https://www.codewithharry.com/blogpost/mysql-cheatsheet</li>
<li>https://www.codewithharry.com/blogpost/mongodb-cheatsheet</li>
        </ul>c notes<ul>
<li>https://www.codewithharry.com/videos/c-language-tutorials-in-hindi-1</li>
<li>https://www.codewithharry.com/videos/c-practice-programs-in-hindi-1</li>
          </ul>html css<ul>
<li>https://www.codewithharry.com/videos/web-development-in-hindi-1</li>
           </ul> php<ul>
<li>https://www.codewithharry.com/videos/php-tutorials-in-hindi-1</li>
          </ul>python<ul>
<li>https://www.codewithharry.com/videos/python-tutorials-for-absolute-beginners-1</li>
<li>https://www.codewithharry.com/videos/python-practice-programs-in-hindi-1</li>
          </ul> java<ul>
<li>https://www.codewithharry.com/videos/java-tutorials-for-beginners-1</li>
<li>https://www.youtube.com/playlist?list=PLu0W_9lII9ajyk081To1Cbt2eI5913SsL</li>
<li>https://www.youtube.com/watch?v=ihk_Xglr164</li>
<li>https://www.youtube.com/watch?v=ZSPZob_1TOk</li>
<li>https://www.youtube.com/watch?v=gfDE2a7MKjA</li>
<li>https://www.youtube.com/watch?v=xW7ro3lwaCI</li>
</pre></ul>
<br>
<h2 id="validator">html css java php validators</h2>
<ol><pre>
<li><a href="https://validator.w3.org/">https://validator.w3.org/</a>      html</li>
<li><a href="https://extendsclass.com/python-tester.html">https://extendsclass.com/python-tester.html</a>    python</li>
<li><a href="http://jigsaw.w3.org/css-validator/">http://jigsaw.w3.org/css-validator/</a>       css</li>
</pre></ol>
<br>
<h2 id="english">english errors in sentences sumarizing and paramaking tools</h2>
<ol><pre>
<li><a href="https://www.checkgrammar.org/">https://www.checkgrammar.org/</a></li>
<li><a href="https://www.gingersoftware.com/grammarcheck">https://www.gingersoftware.com/grammarcheck</a></li>
<li><a href="https://smallseotools.com/grammar-checker/">https://smallseotools.com/grammar-checker/</a></li>
<li><a href="https://sentencecheckup.com/">https://sentencecheckup.com/</a></li>
<li><a href="https://quillbot.com/">https://quillbot.com/</a></li>
<li><a href="https://autosummarizer.com/">https://autosummarizer.com/</a></li>
<li><a href="http://www.textcompactor.com/">http://www.textcompactor.com/</a></li>
<li><a href="https://resoomer.com/">https://resoomer.com/</a></li>
<li><a href="https://www.textrewriter.com/">https://www.textrewriter.com/</a></li>
</pre></ol>
<br>
<h2 id="download youtube">download youtube videos and mp3 videos</h2>
<ul><pre>
<li><a href="https://www.y2meta.com/youtube/LhIKCDi0Nd0">https://www.y2meta.com/youtube/LhIKCDi0Nd0    all</a></li>
<li><a href="https://loader.to/">https://loader.to/</a></li>
      mp3
<li><a href="https://320ytmp3.com/en53/">https://320ytmp3.com/en53/</a></li>
<li><a href="https://y2mate.is/en68/youtube-to-mp3.html">https://y2mate.is/en68/youtube-to-mp3.html</a></li>
<li><a href="https://getx.topsandtees.space/dw1oDEpeW6">https://getx.topsandtees.space/dw1oDEpeW6</a></li>
<li><a href="https://onlinevideoconverter.pro/en26/youtube-converter-mp3">https://onlinevideoconverter.pro/en26/youtube-converter-mp3</a></li>
<li><a href="https://ytmp3.cc/uu121cc/">https://ytmp3.cc/uu121cc/</a></li>
<li><a href="https://9convert.com/en/155-youtube-to-mp3">https://9convert.com/en/155-youtube-to-mp3</a></li>
   video download
<li><a href="https://y2mate.is/en68/">https://y2mate.is/en68/</a></li>
<li><a href="https://onlinevideoconverter.pro/en10/youtube-video-downloader">https://onlinevideoconverter.pro/en10/youtube-video-downloader</a></li>
<li><a href="https://loader.to/en72/1080p-video-downloader.html">https://loader.to/en72/1080p-video-downloader.html</a></li>
<li><a href="https://yt1s.io/en3">https://yt1s.io/en3</a></li>
<li><a href="https://btclod.com/converter-2/">https://btclod.com/converter-2/</a></li>
<li><a href="https://youtubedownloader.sh/en9/">https://youtubedownloader.sh/en9/</a></li>
</pre></ul>
<br>
<h2 id="online desktops">online desktops virtual  and android mobile</h2>
<ol><pre>
<li><a href="https://www.onworks.net/runos/create-os.html?os=kali-linux-2019.1a-i386&home=init">onworks.net kali</a></li>
<li><a href="https://www.apkonline.net/apkonlinesession.php#/client/REVGQVVMVABjAGRlZmF1bHQ=?username=guest01&password=server0101">apkonline.net</a></li>
<li><a href="https://www.onworks.net/os-distributions/ubuntu-based">onworks.net ubuntu</a></li>
</pre></ol>
<br>
<h2 id="online projects">source codes , ideas of AIML and other source codes projects</h2>
<ol><pre>
<li><h3><a href="https://1000projects.org">https://1000projects.org best ideas and how to do best</a></h3></li>
<li><a href="https://itsourcecode.com/free-projects/python-projects/chatbot-in-python-tutorial-with-source-code/">chatbot-in-python</a></li>
<li><a href="https://code-projects.org/ai-chatbot-in-python-with-source-code/">ai-chatbot</a></li>
</pre></ol>
<br>
<h2 id="virtual box">virtual box and others</h2>
<ol><pre>
<li><a href="https://www.youtube.com/watch?v=ywQfhungZzw">install puppy linux</a></li>
<li>other links</li>
<a href="https://www.youtube.com/channel/UCzAjKbXXWnsJ58bTrUvUBAA">https://www.youtube.com/channel/UCzAjKbXXWnsJ58bTrUvUBAA</a>
<a href="https://www.youtube.com/channel/UC0T6MVd3wQDB5ICAe45OxaQ">https://www.youtube.com/channel/UC0T6MVd3wQDB5ICAe45OxaQ</a>
<a href="https://www.youtube.com/playlist?list=PLmGElG-9wxc8SWVIZSP3pzV8OsFh8ooGh">https://www.youtube.com/playlist?list=PLmGElG-9wxc8SWVIZSP3pzV8OsFh8ooGh</a>
<a href="https://www.youtube.com/watch?v=0qEsIsqtenU&list=PLjVLYmrlmjGdBWjZzfJqUWj5KJ_JOnFXR&index=21">https://www.youtube.com/watch?v=0qEsIsqtenU&list=PLjVLYmrlmjGdBWjZzfJqUWj5KJ_JOnFXR&index=21</a>

best html
<a href="https://jsfiddle.net/">https://jsfiddle.net/</a>
<a href="https://stackblitz.com/angular/ynrnqrokppx">https://stackblitz.com/angular/ynrnqrokppx            (online load)</a>
<a href="https://www.youtube.com/hashtag/shorts">https://www.youtube.com/hashtag/shorts</a>
<a href="https://www.youtube.com/watch?v=YytcrgmFyMI">https://www.youtube.com/watch?v=YytcrgmFyMI</a>
<li><a href="https://www.youtube.com/watch?v=z3FFnIO1Q9M">virtualbox</a></li>
<li><a href="https://www.youtube.com/watch?v=x5MhydijWmc">ubuntu</a></li>
<li><a href="https://www.youtube.com/watch?v=Ayw5Ifzly64">kali</a></li>
<li><a href="https://www.youtube.com/watch?v=V5tyIdP0Qs4">android</a></li>
<li>mac</li>
https://www.youtube.com/watch?v=LNsC2sUk26Y
https://www.youtube.com/watch?v=3LYgwi4Bm1w

<li>free cloud service in IBM no time limit no credit card details. free vps</li>
https://www.youtube.com/watch?v=BBdytwA2Xws

<li>vitual michine</li>
https://www.youtube.com/watch?v=U5XhzNSF9VA
https://www.youtube.com/watch?v=uIYLAc974SA
https://www.youtube.com/watch?v=hdH0av9i_Lw
https://online.cameyo.com/public
https://discord.com/invite/HBrK26SsN4
free google cloud
https://www.youtube.com/watch?v=QTbEy7AG9U4
https://od.obagg.com/
https://www.youtube.com/watch?v=7CHi-kt8KJo
<li><a href="https://docs.microsoft.com/en-us/learn/modules/create-windows-virtual-machine-in-azure/5-exercise-connect-to-a-windows-vm-using-rdp">virtual disk</a></li>
<li><a href="https://docs.microsoft.com/en-us/learn/modules/create-windows-virtual-machine-in-azure/5-exercise-connect-to-a-windows-vm-using-rdp">https://docs.microsoft.com/en-us/learn/modules/create-windows-virtual-machine-in-azure/5-exercise-connect-to-a-windows-vm-using-rdp</a></li>
<li><a href="https://go.qwiklabs.com/skillschallenge">https://go.qwiklabs.com/skillschallenge</a></li>
</pre></ol>
<br>
<h2 id="movies">movies serials(hotstar etc) songs</h2>
<ol><pre>
<li><a href="https://www.hindilinks4u.to/">https://www.hindilinks4u.to/</a></li>
<li><a href="https://wynk.in/music">https://wynk.in/music</a></li>
<li><a href="https://music.youtube.com/">https://music.youtube.com/</a></li>
</pre></ol>
<br>
<h2 id="phpprojects">php projects with source codes</h2>
<ol><pre>
<li><a href="https://www.phptpoint.com/projects/">Php Projects With Source Code, MySql - Free Download Project for Student</a></li>
<li><a href="https://itsourcecode.com/free-projects/php-project/php-projects-source-code-free-downloads/">PHP Projects With Source Code Free Download Ideas | Topics | Video</a></li>
<li><a href="https://www.youtube.com/playlist?list=PLr2Jraft7i9p4EO_rHYNCxZ3V7IPtBFsY">php projects with source code - YouTube</a></li>
<li><a href="https://projectworlds.in/free-projects/php-projects/online-examination/">php projects</a></li>
<li><a href="https://phpgurukul.com/php-projects-free-downloads/">Free PHP Projects with Source Code, Download PHP Project Free for beginners</a></li>
<li><a href="https://www.youtube.com/playlist?list=PLOkQm0eVYKPIpDBBHQpvIBlPuKkckrrSN">PHP Projects Installation Guide - YouTube</a></li>
<li><a href="https://www.sourcecodester.com/php/9668/upload-and-download-files-php.html">Upload and Download Files in PHP/PDO Tutorial</a></li>
<li><a href="https://codewithawa.com/posts/how-to-upload-and-download-files-php-and-mysql">How to upload and download files PHP and MySQL</a></li>
<li><a href="https://www.youtube.com/watch?v=hAQUEYSNq-c">Make a CGPA calculator using html, css, bootstrap and php</a></li>
<li><a href="https://codeshack.io/gallery-system-php-mysql-js/">Gallery System with PHP, MySQL and JS</a></li>
<li><a href="https://www.codegrepper.com/code-examples/html/how+to+show+other+website+inside+my+website">Html Answers</a></li>
<li><a href="https://www.youtube.com/watch?v=lcO8Peici0Y">Awesome Get data from website Show Scrape Data from Website Using php</a></li>
<li><a href="https://simplehtmldom.sourceforge.io/">PHP Simple HTML DOM Parser</a></li>
</pre></ol>
<br>
<h2 id="Python projets link"><a href="https://data-flair.training/blogs/machine-learning-project-ideas/">Python projets link with source codes</a></h2>
<ol><pre>
<li><a href="https://www.youtube.com/playlist?list=PLWPirh4EWFpEPEtQRXTuvl195x5vXFMXR">Python Online Training</a></li>
<li><a href="https://nickymarino.com/2021/04/13/create-python-web-apps-with-flask-and-replit/">https://nickymarino.com/2021/04/13/create-python-web-apps-with-flask-and-replit/</a></li>
<li><a href="https://www.youtube.com/watch?v=zuxzE7--RYM">Python Web Development | Web Development Using Django | Python Django Tutorial</a></li>
<li><a href="https://wiki.python.org/moin/BeginnersGuide">https://wiki.python.org/moin/BeginnersGuide</a></li>
<li><a href="https://www.youtube.com/watch?v=xTn4DXI8dyc">How to Host Flask App for Free in just 2 minutes | Zeet - Free Hosting</a></li>
</pre></ol>
<br>
<h2 id="hod links">hod links (ML datasets)</h2>
<ol><pre>
<li><a href="https://www.interviewbit.com/blog/artificial-intelligence-projects/">artificial-intelligence-projects</a></li>
<li><a href="https://archive.ics.uci.edu/ml/index.php">https://archive.ics.uci.edu/ml/index.php</a></li>
<li><a href="https://machinelearningmastery.com/category/python-machine-learning/">https://machinelearningmastery.com/category/python-machine-learning/</a></li>
<li><a href="https://keras.io/examples/">https://keras.io/examples/</a></li>
<li><a href="https://www.youtube.com/watch?v=Bn_jRbQcmV4&list=PLdxQ7SoCLQANQ9fQcJ0wnnTzkFsJHlWEj">https://www.youtube.com/watch?v=Bn_jRbQcmV4&list=PLdxQ7SoCLQANQ9fQcJ0wnnTzkFsJHlWEj</a></li>
<li><a href="https://www.coursera.org/learn/machine-learning?">https://www.coursera.org/learn/machine-learning?</a></li>
<li><a href="https://www.coursera.org/specializations/deep-learning?">https://www.coursera.org/specializations/deep-learning?</a></li>
</pre></ol>
<br>
<h2 id="java-script-nodejs">javascript and nodejs projects</h2>
<ol><pre>
<li><a href="https://nodejs.org/dist/latest-v16.x/docs/api/">https://nodejs.org/dist/latest-v16.x/docs/api/</a></li>
<li><a href="https://data-flair.training/blogs/machine-learning-project-ideas/">https://data-flair.training/blogs/machine-learning-project-ideas/</a></li>
<li><a href="https://www.youtube.com/watch?v=mIW_8dMQaUk"> Install Node JS, NPM, VS Code IDE & Running our First Node.JS Script</a></li>
</ol><ul>
<br>
<h2 id="online deployment">online deployment and free hosting</h2>
<ol><pre>
<li><a href="https://www.heroku.com/">https://www.heroku.com/</a></li>
<li><a href="https://www.heliohost.org/">https://www.heliohost.org/</a></li>
<li><a href="https://profreehost.com/">https://profreehost.com/</a></li>
<li><a href="https://infinityfree.net/">https://infinityfree.net/</a></li>
<li><a href="https://in.000webhost.com/">https://in.000webhost.com</a></li>
<li><a href="https://serverpilot.io/">https://serverpilot.io/</a></li>
<li><a href="https://drv.tw/">https://drv.tw/</a></li>
<li><a href="https://go.glideapps.com/">https://go.glideapps.com/</a></li>
</ol><ul>
<li>best free ---- netlify.com</li>
<li>profreehost.com</li>
<li>awardspace </li>
<li>infinity free</li>
<li>drv.tw <a href="https://www.youtube.com/watch?v=qtQ9TvQLKjc">https://www.youtube.com/watch?v=qtQ9TvQLKjc</a>(google drive) (cname record)(www -host name)(remove https and text after drv.tw)(url redirect to your domain name)</li>
<li><a href="https://www.youtube.com/watch?v=tu501rOVMGc">https://www.youtube.com/watch?v=tu501rOVMGc</a></li>
<li><a href="https://www.youtube.com/watch?v=IbUmbYKY_Q4">https://www.youtube.com/watch?v=IbUmbYKY_Q4</a></li>
</pre></ul>
<br>
<h2 id="library books">library books</h2>
<ol><pre>
<li><a href="http://libgen.rs/">http://libgen.rs/</a></li>
<li><a href="https://ndl.iitkgp.ac.in/">https://ndl.iitkgp.ac.in/</a></li>
<li><a href="https://3lib.net/">https://3lib.net/</a></li>
<li><a href="https://www.pdfdrive.com/">https://www.pdfdrive.com/</a></li>
<li><a href="http://gen.lib.rus.ec/">http://gen.lib.rus.ec/</a></li>
<li><a href="https://bookboon.com/">https://bookboon.com/</a></li>
<li><a href="https://www.free-ebooks.net/">https://www.free-ebooks.net/</a></li>
<li><a href="http://freecomputerbooks.com/">http://freecomputerbooks.com/</a></li>
<li><a href="http://srv.manybooks.net/">http://srv.manybooks.net/</a></li>
<li><a href="http://calameo.pdf-downloader.com/index.php">http://calameo.pdf-downloader.com/index.php</a></li>
<li><a href="https://archive.org/index.php">https://archive.org/index.php</a></li>
<li><a href="https://www.pdf-book-search.com/">https://www.pdf-book-search.com/</a></li>
<li><a href="https://manybooks.net/">https://manybooks.net/</a></li>
<li><a href="https://freecomputerbooks.com/">https://freecomputerbooks.com/</a></li>
<li><a href="https://librivox.org/">https://librivox.org/</a></li>
<li><a href="https://www.free-ebooks.net/">https://www.free-ebooks.net/</a></li>
<li><a href="http://www.authorama.com/">http://www.authorama.com/</a></li>
<li><a href="http://www.gutenberg.org/">http://www.gutenberg.org/</a></li>
<li><a href="http://en.childrenslibrary.org/">http://en.childrenslibrary.org/</a></li>
<li><a href="http://www.readprint.com/">http://www.readprint.com/</a></li>
<li><a href="https://openlibrary.org/">https://openlibrary.org/</a></li>
<li><a href="https://archive.org/details/texts">https://archive.org/details/texts</a></li>
<li><a href="https://en.wikisource.org/wiki/Main_Page">https://en.wikisource.org/wiki/Main_Page</a></li>
<li><a href="https://www.slideshare.net/">https://www.slideshare.net/</a></li>
<li><a href="http://digital.library.upenn.edu/books/">http://digital.library.upenn.edu/books/</a></li>
<li><a href="https://www.scribd.com/?lohp=1">https://www.scribd.com/</a></li>
</pre></ol>
<br>
<h2 id="learnAIML">learn AIML and Programing basics</h2>
<ol><pre>
<li><a href="https://www.codingninjas.com/codestudio">codingninjas - for learning program</a></li>
<li><a href="https://www.hackerrank.com/">hackerrank - to practice program</a></li>
<li><a href="https://archive.ics.uci.edu/ml/index.php">Machine Learning Repository </a></li>
<li><a href="https://machinelearningmastery.com/">Machine Learning & Deep learning</a></li>
<li><a href="https://keras.io/examples/">Python Code Examples</a></li>
<li><a href="https://www.youtube.com/playlist?list=PLdxQ7SoCLQANQ9fQcJ0wnnTzkFsJHlWEj">video-Deep Learning -Google Colaboratory</a></li>
<li><a href="https://leetcode.com/">https://leetcode.com/</a></li>
</pre></ol>
<br>
<h2 id="semvideos">all semester physics chemistry cycle</h2>
<pre><ol><h4>1st year</h4>
<li><a href="https://www.youtube.com/playlist?list=PLVDfFatHsysRfe_p0_XwoYnmOj3sTJ4f4">physics cycle</a></li>
<li><a href="https://www.youtube.com/playlist?list=PLVDfFatHsysSm84-O26R9WbZVKmD6zakV">chemistry cycle</a></li></ol><ol>
<h4>CSE other year</h4>
<li><a href="https://www.youtube.com/playlist?list=PLVDfFatHsysQGtvuaDbTTkle69C0wHaK_">3rd semester</a></li>
<li><a href="https://www.youtube.com/playlist?list=PLVDfFatHsysTYXJqB1T8DoSdnJ-SdCoOk">4th semester</a></li>
<li><a href="https://www.youtube.com/playlist?list=PLVDfFatHsysT3-uOgya8JWOrlrWCRIDpa">5th semester</a></li>
<li><a href="https://www.youtube.com/playlist?list=PLVDfFatHsysQ027cgZS_S_ydX8oYsnZRk">6th semester</a></li>
<li><a href="https://www.youtube.com/playlist?list=PLVDfFatHsysRRh2FzCfx2sTYDPGjGaRA6">7th semester</a></li>
<li><a href="https://www.youtube.com/playlist?list=PLVDfFatHsysRBoJP2dZftSjK80JEyDPE5">8th semester</a></li></ol> <ol>
<li><a href="https://www.youtube.com/c/CanaraEngineeringCollegeMangaloreChannel/playlists?view=58">all other branches all semester</a></li>
<li><a href="https://www.digital.canaraengineering.in/">https://www.digital.canaraengineering.in/</a>-----4CB19CS002</li>
<li><a href="https://sites.google.com/view/dksbin">https://sites.google.com/view/dksbin</a></li>
<li><a href="https://vanupama.blogspot.com/">https://vanupama.blogspot.com/</a></li></pre> </ol>
<br>
<h2 id="runners">runners (many in one best) </h2>
<ol><pre>
<li><a href="https://py3.codeskulptor.org/">https://py3.codeskulptor.org/     python</a></li>
<li><a href="https://www.onlinegdb.com/">https://www.onlinegdb.com/  c,c++,php,java,python,html </a></li>
<li><a href="https://www.programiz.com/">https://www.programiz.com/programiz all programs best</a></li>
<li><a href="https://www.online-cpp.com/">https://www.online-cpp.com/online-cpp</a></li>
<li><a href="https://repl.it/">repl  (group)</a></li>
<li><a href="https://rextester.com/l/c_online_compiler_gcc">rextester c(gcc),c++,php,java,python,html</a></li>
<li><a href="https://onecompiler.com/">one compiler      c,c++,php,java,python,html</a></li>
<li><a href="https://paiza.io/en"> paiza              c,c++,php,java,python,html (Build web app)</a></li>
<li><a href="https://www.learnpython.org/">learn.orgs       c,c++,php,java,python,html and many other</a></li>
<li><a href="https://www.tutorialspoint.com/codingground.htm">tutorialpoint   c,c++,php,java,python,html and many other</a></li>
<li><a href="https://code.sololearn.com/#">sololearn      c,c++,php,java,python,html</a></li>
<li><a href="https://codeanywhere.com/editor/#">code any where       c,c++,php,java,python,html</a></li>
<li><a href="https://www.codechef.com/ide?itm_medium=navmenu&itm_campaign=ide">codechef      c,c++,php,java,python,html</a></li>
<li><a href="https://www.jdoodle.com/">jdoodle       c,c++,php,java,python,html</a></li>
<li><a href="https://hackr.io/">*** many source codes ,about AIML  and free certificate practice ***</a></li>
<li><a href="https://paiza.io/en/projects/new?language=php">all interpriter paiza</a></li>
</pre></ol>
<br>
<h2 id="notebook">notebook runners</h2>
<ol><pre>
<li><a href="https://colab.research.google.com/notebooks/intro.ipynb#recent=true">colab</a></li>
<li><a href="https://notebooks.gesis.org/binder/v2/gh/ipython/ipython-in-depth/7e5ce96cc9251083979efdfc393425f1229a4a68?filepath=binder%2FIndex.ipynb">jupyter python 3</a></li>
<li><a href="https://mybinder.org/v2/gh/SpencerPark/ijava-binder/master">jupyter and githib java and python 3 </a></li>
<li><a href="https://jupyter.org/try">jupyter python and c++ </a></li>
<li><a href="https://www.codephponline.com/">https://www.codephponline.com/</a></li>
<li><a href="https://codepen.io/">html css codepen</a></li>
</pre></ol>
<br>
<h2 id="w3">w3 learn and code</h2>
<ol><pre>
<li><a href="https://www.w3schools.com/html/tryit.asp?filename=tryhtml_intro">html w3</a></li>
<li><a href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_compiler">php w3</a></li>
<li><a href="https://www.w3schools.com/python/trypython.asp?filename=demo_default">python w3</a></li>
<li><a href="https://www.w3schools.com/java/tryjava.asp?filename=demo_helloworld">java w3</a></li>
<li><a href="https://www.w3schools.com/cpp/trycpp.asp?filename=demo_helloworld">c++ w3</a></li>
</pre></ol>
<br>
<h2 id="readingbestall">reading best all</h2>
<ol><pre>
<li><a href="https://www.w3schools.com/">w3school c++,python,java,php,html,machine learning and other</a></li>
<li><a href="https://www.w3schools.in/c-tutorial/">w3school c </a></li>
<li><a href="https://www.javatpoint.com/">javatpoint c,c++,python,java,php,html</a></li>
<li><a href="https://www.sololearn.com/learning">solo learn c,c++,python,java,php,html,machine learning and other</a></li>
<li><a href="https://www.learnpython.org/">learn.org short c,c++,python,java,php,html</a></li>
<li><a href="https://www.guru99.com/">guru99 c++,python,java,php,html</a></li>
<li><a href="https://www.online-python.com/online_python_compiler">online-python</a></li>
<li><a href="https://www.onworks.net/os-distributions/ubuntu-based">ubuntu sytem and other system</a></li>
<li><a href="https://itsfoss.com/online-linux-terminals/">best terminator all</a></li>
<li><a href="https://hackr.io/">*** many source codes ,about AIML  and free certificate practice ***</a></li>
<li>https://www.geeksforgeeks.org</li>
<li>https://www.javatpoint.com/c-programming-language-tutorial</li>
<li>https://www.programiz.com/c-programming</li>
<li>https://www.hackerrank.com/</li>
<li>https://www.hackerearth.com/</li>
<li>https://www.w3schools.com/</li>
<li>https://www.w3schools.in/c-tutorial/</li>
<li>https://www.sololearn.com/learning</li>
<li>https://www.guru99.com/</li>
<li>https://www.educative.io/</li>
</pre></ol>
<br>
<h2 id="otherlearn">many other runner</h2>
<ol><pre>
<li><a href="https://www.codiva.io/?redirect_url=/profile#guestTryLangPickerModal">codiva best for java then c and c++</a></li>
<li><a href="https://compiler.javatpoint.com/opr/test.jsp?filename=Simple">javatpoint java</a></li>
<li><a href="https://www.programiz.com/c-programming/online-compiler/">programiz c,c++,python</a></li>
<li><a href="https://www.mycompiler.io/">mycompiler c,c++,php,java,python</a></li>
<li><a href="https://rextester.com/">rextester c,c++,php,java,python</a></li>
<li><a href="https://www.guru99.com/execute-python-online.html">guru99 python</a></li>
<li><a href="https://www.guru99.com/execute-html-online.html#:~:text=Follow%20the%20simple%20steps%20below%20to%20compile%20and,This%20code%20is%20editable.%20Click%20Run%20to%20Execute">guru99 html</a></li>
<li><a href="https://www.ideone.com/">ideone c,c++,java,python</a></li>
<li><a href="https://jsfiddle.net/">jsfiddle html</a></li>
<li><a href="https://www.javatpoint.com/c-programming-language-tutorial">learn c javatpoint</a><br></li>
<li><a href="https://www.programiz.com/c-programming">revision programiz</a><br></li>
<li><a href="https://www.onlinegdb.com/">online c compiler onlinegdb</a></li>
<li>https://www.onlinegdb.com/</li>
<li>https://rextester.com/l/c_online_compiler_gcc</li>
<li>https://onecompiler.com/</li>
<li>https://www.learnpython.org/</li>
<li>https://www.tutorialspoint.com/codingground.htm</li>
<li>https://code.sololearn.com/#</li>
<li>https://codeanywhere.com/editor/#</li>
<li>https://www.codechef.com/ide?itm_medium=navmenu&itm_campaign=ide</li>
<li>https://www.jdoodle.com/</li>
<li>https://leetcode.com/</li>
<li>https://codesandbox.io/</li>
<li>https://playcode.io/</li>
<li>https://stackblitz.com/</li>
<li>https://codepen.io/</li>
<li>https://jsbin.com/</li>
<li>https://codepen.io/</li>
<li>https://app.netlify.com/</li>
</pre></ol>
<br>
<h2 id="songs">songs music</h2>
<ol><pre>
<li><a href="https://bossmobi.co.in/categorylist/168/bollywood-mp3-songs/default/1">pagalsongs</a></li>
<li><a href="https://raag.fm/">raag.fm</a></li>
<li><a href="https://www.pagalworld.mobi/">pagalworld</a></li>
<li><a href="https://bossmobi.co.in/">bossmobi</a></li>
<li><a href="https://1drv.ms/u/s!AtbHnfZF5chyZ_CNk8NswOKBU6Q?e=JlrwAa"> all songs onedrive</a></li>
</pre></ol>
<br>
<h2 id="create websites and apps">create websites and apps</h2>
<ol><pre>
<li><a href="https://www.nocodesaga.com/">nocodesaga</a>(other websites inside this)</li>
<li><a href="https://bitnami.com/">bitnami</a></li>
<li>wordpress org and com</li>
<li><a href="https://www.wix.com/">wix</a></li>
<li><a href="https://wordpress.com/create/">wordpress</a></li>
<li><a href="https://www.squarespace.com/website-design?irgwc=1&clickid=Q810U0wBbxyLT9r0O7XQxx3QUkE3PUyNqwRSz40&utm_medium=pp&utm_source=Affiliate%20Marketing%20Corp&utm_campaign=Affiliate%20Marketing%20Corp&channel=pp&subchannel=Affiliate%20Marketing%20Corp&source=Affiliate%20Marketing%20Corp">squarespace</a></li>
<li><a href="https://www.webnode.com/blog/">webnode</a></li>
<li><a href="https://www.jimdo.com/blog/">jimdo</a></li>
<li><a href="https://www.blogger.com/about/?bpli=1">blogger</a></li>
<li><a href="https://www.tumblr.com/">tumblr</a></li>
<li><a href="https://accounts.google.com/signin/v2/identifier?service=jotspot&passive=1209600&continue=https%3A%2F%2Fsites.google.com%2F&followup=https%3A%2F%2Fsites.google.com%2F&flowName=GlifWebSignIn&flowEntry=ServiceLogin">accounts.google.com</a></li>
<li><a href="https://medium.com/">medium</a></li>
<li><a href="https://tumblr.com/">tumblr</a></li>
<li><a href="https://www.hostinger.com/">hostinger</a></li>
<li><a href="https://www.freehosting.com/free-hosting.html">freehosting</a></li>
<li><a href="https://www.websitebuilder.com/">websitebuilder</a></li>
<li><a href="https://us.webnode.com/">webnode</a></li>
<li><a href="https://www.imcreator.com/">imcreator</a></li>
</pre></ol>
<br>
<h2 id="otherlink12">other links that could not be displayed</h2>
<ol><pre>
<li>https://call2friends.com/free-calls                      2 min free call</li>
<li>trinket: https://trinket.io/            (embed ,no c program)</li>
<li>https://www.fakeaddressgenerator.com/usa_address_generator</li>
<li>https://www.youtube.com/watch?v=er2h-daUwx0</li>
<li>http://cbitkolar.edu.in/wp-content/uploads/2020/04/ACN_Module2-1.pdf</li>
<li>https://c.happycodings.com/games-and-graphics/code30.html</li>
<li>https://www.codewithc.com/c-projects-with-source-code/</li>
<li>https://www.youtube.com/watch?v=frDKP-A71W0</li>
<li>http://kx5thpx2olielkihfyo4jgjqfb7zx7wxr3sd4xzt26ochei4m6f7tayd.onion/</li>
<li>www.android.universityupdates.in</li>
<li>linuxpuppy ---     https://www.youtube.com/watch?v=ywQfhungZzw</li>
</pre></ol>
<br>
<h2 id="peg words">peg word</h2>
<ol><pre>
<li><a href="http://www.rememberg.com/Peg-list-1000/">http://www.rememberg.com/Peg-list-1000/</a></li>
<li><a href="https://major-system.info/en/">https://major-system.info/en/</a></li>
</pre></ol>
<br>
<h2 id="pptsedit">ppts and website editing</h2>
<ol><pre>
<li><a href="https://slidesharedownloader.ngelmat.net/">Best slideshare ppt downloader</a></li>
<li><a href="https://simply-debrid.com/">slideshare ppt downloader simply-debrid</a></li>
<li>https://downloader.la/slideshare-downloader.html</li>
<li><a href="https://slidesharedownloader.ngelmat.net/">https://slidesharedownloader.ngelmat.net/ best</a></li>
<li>website editing
    javascript:document.body.contentEditable = 'true'; document.designMode='on'; void 0</li>
<li>emeded c to website form website- replit
    like src -- https://repl.it/@(username)/(repl-name)?outputonly=1&lite=true</li>
</pre></ol>
<br>
<h2 id="major-cloud-providers">Major Cloud Providers</h2>
 <ol>
<li><a href="https://cloud.google.com">Google Cloud Platform</a>
 <ol>
<li>App Engine - 28 frontend instance hours per day, 9 backend instance hours per day</li>
<li>Cloud Firestore - 1GB storage, 50,000 reads, 20,000 writes, 20,000 deletes per day</li>
<li>Compute Engine - 1 non-preemptible e2-micro, 30GB HDD, 5GB snapshot storage (restricted to certain regions), 1 GB network egress from North America to all region destinations (excluding China and Australia) per month</li>
<li>Cloud Storage - 5GB, 1GB network egress</li>
<li>Cloud Shell - Web-based Linux shell/basic IDE with 5GB of persistent storage. 60 hours limit per week</li>
<li>Cloud Pub/Sub - 10GB of messages per month</li>
<li>Cloud Functions - 2 million invocations per month (includes both background and HTTP invocations)</li>
<li>Cloud Run - 2 million requests per month, 360,000 GB-seconds memory, 180,000 vCPU-seconds of compute time, 1 GB network egress from North America per month</li>
<li>Google Kubernetes Engine - No cluster management fee for one zonal cluster. Each user node is charged at standard Compute Engine pricing</li>
<li>BigQuery - 1 TB of querying per month, 10 GB of storage each month</li>
<li>Cloud Build - 120 build-minutes per day</li>
<li>Cloud Source Repositories - Up to 5 Users, 50 GB Storage, 50 GB Egress</li>
<li>Full, detailed list - https://cloud.google.com/free</li>
 </ol></li>
<li><a href="https://aws.amazon.com">Amazon Web Services</a>
 <ol>
<li>Amazon CloudFront - 1TB egress per month</li>
<li>Amazon DynamoDB - 25GB NoSQL DB</li>
<li>Amazon EC2 - 100GB aggregated egress per month</li>
<li>Amazon EC2 - 750 hours per month of t2.micro or t3.micro</li>
<li>Amazon EBS - 30GB per month of General Purpose (SSD) or Magnetic</li>
<li>Amazon ELB - 750 hours per month</li>
<li>Amazon Lambda - 1 million requests per month</li>
<li>Amazon SNS - 1 million publishes per month</li>
<li>Amazon SES - 62.000 messages per month</li>
<li>Amazon Cloudwatch - 10 custom metrics and 10 alarms</li>
<li>Amazon Glacier - 10GB long-term object storage</li>
<li>Amazon SQS - 1 million messaging queue requests</li>
<li>Amazon CodeBuild - 100min of build time per month</li>
<li>Amazon CodeCommit - 5 active users per month</li>
<li>Amazon CodePipeline - 1 active pipeline per month</li>
<li>Full, detailed list - https://aws.amazon.com/free/</li>
 </ol></li>
<li><a href="https://azure.microsoft.com">Microsoft Azure</a>
 <ol>
<li><a href="https://azure.microsoft.com/services/virtual-machines/">Virtual Machines</a> - 1 B1S Linux VM, 1 B1S Windows VM</li>
<li><a href="https://azure.microsoft.com/services/app-service/">App Service</a> - 10 web, mobile or API apps</li>
<li><a href="https://azure.microsoft.com/services/functions/">Functions</a> - 1 million requests per month</li>
<li><a href="https://azure.microsoft.com/services/devtest-lab/">DevTest Labs</a> - Enable fast, easy, and lean dev-test environments</li>
<li><a href="https://azure.microsoft.com/services/active-directory/">Active Directory</a> - 500,000 objects</li>
<li><a href="https://azure.microsoft.com/services/active-directory/external-identities/b2c/">Active Directory B2C</a> - 50,000 monthly stored users</li>
<li><a href="https://azure.microsoft.com/services/devops/">Azure DevOps</a> - 5 active users, unlimited private Git repos</li>
<li><a href="https://azure.microsoft.com/services/devops/pipelines/">Azure Pipelines</a> — 10 free parallel jobs with unlimited minutes for open source for Linux, macOS, and Windows</li>
<li><a href="https://azure.microsoft.com/services/iot-hub/">Microsoft IoT Hub</a> - 8,000 messages per day</li>
<li><a href="https://azure.microsoft.com/services/load-balancer/">Load Balancer</a> - 1 free public load balanced IP (VIP)</li>
<li><a href="https://azure.microsoft.com/services/notification-hubs/">Notification Hubs</a> - 1 million push notifications</li>
<li><a href="https://azure.microsoft.com/pricing/details/bandwidth/">Bandwidth</a> - 5GB egress per month</li>
<li><a href="https://azure.microsoft.com/services/cosmos-db/">Cosmos DB</a> - 5GB storage and 400 RUs of provisioned throughput</li>
<li><a href="https://azure.microsoft.com/pricing/details/app-service/static/">Static Web Apps</a> — Build, deploy and host static apps and serverless functions, with free SSL, Authentication/Authorization and custom domains</li>
<li><a href="https://azure.microsoft.com/services/storage/">Storage</a> - 5GB LRS File or Blob storage</li>
<li><a href="https://azure.microsoft.com/services/cognitive-services/">Cognitive Services</a> - AI/ML APIs (Computer Vision, Translator, Face detection, Bots…) with free tier including limited transactions</li>
<li><a href="https://azure.microsoft.com/services/search/#features">Cognitive Search</a> - AI-based search and indexation service, free for 10,000 documents</li>
<li><a href="https://azure.microsoft.com/services/kubernetes-service/">Azure Kubernetes Service</a> - Managed Kubernetes service, free cluster management</li>
<li><a href="https://azure.microsoft.com/services/event-grid/">Event Grid</a> - 100K ops/month</li>
<li>Full, detailed list - <a href="https://azure.microsoft.com/free/">https://azure.microsoft.com/free/</a></li>
 </ol></li>
<li><a href="https://www.oracle.com/cloud/">Oracle Cloud</a>
 <ol>
<li>Compute - 2 x64-based with 1 GB RAM each, 4 Arm-based Ampere A1 cores and 24 GB of memory usable as one VM or up to 4 VMs</li>
<li>Block Volume - 4 volumes, 200 GB total (used for compute)</li>
<li>Object Storage - 10 GB</li>
<li>Load balancer - 1 instance with 10 Mbps</li>
<li>Databases - 2 DBs, 20 GB each</li>
<li>Monitoring - 500 million ingestion datapoints, 1 billion retrieval datapoints</li>
<li>Bandwidth - 10 TB egress per month, speed limited to 50 Mbps on x64 based VM, 500 Mbps * core count on ARM based VM</li>
<li>Public IP - 2 IPv4 for VMs, 1 IPv4 for load balancer</li>
<li>Notifications - 1 million delivery options per month, 1000 emails sent per month</li>
<li>Full, detailed list - https://www.oracle.com/cloud/free/</li>
 </ol></li>
<li><a href="https://www.ibm.com/cloud/free/">IBM Cloud</a>
 <ol>
<li>Cloud Functions - 5 million executions per month</li>
<li>Object Storage - 25GB per month</li>
<li>Cloudant database - 1 GB of data storage</li>
<li>Db2 database - 100MB of data storage</li>
<li>API Connect - 50,000 API calls per month</li>
<li>Availability Monitoring - 3 million data points per month</li>
<li>Log Analysis - 500MB of daily log</li>
<li>Full, detailed list - https://www.ibm.com/cloud/free/</li>
 </ol></li>
 </ol>
 
<h2 id="cloud-management-solutions">Cloud management solutions</h2>
 <ol>
<li><a href="https://www.brainboard.co">Brainboard</a> - Collaborative solution to visually build and manage cloud infrastructures from end-to-end.</li>
<li><a href="https://www.terraform.io/">terraform.io</a> — Terraform Cloud. Free remote state management and team collaboration for teams up to 5 users.</li>
 </ol>
 
<h2 id="source-code-repos">Source Code Repos</h2>
 <ol>
<li><a href="https://bitbucket.org/">Bitbucket</a> — Unlimited public and private Git repos for up to 5 users with Pipelines for CI/CD</li>
<li><a href="http://chiselapp.com/">chiselapp.com</a> — Unlimited public and private Fossil repositories</li>
<li><a href="https://www.codebasehq.com/">codebasehq.com</a> — One free project with 100 MB space and 2 users</li>
<li><a href="https://codeberg.org/">Codeberg.org</a> - Unlimited public and private Git repos for free and open-source projects. Static website hosting with <a href="https://codeberg.page/">Codeberg Pages</a>.</li>
<li><a href="https://www.gitea.com/">Gitea.com</a> - Unlimited public and private Git repos</li>
<li><a href="https://gitgud.io">GitGud</a> — Unlimited private and public repositories. Free forever. Powered by GitLab &amp; Sapphire. CI/CD not provided.</li>
<li><a href="https://github.com/">GitHub</a> — Unlimited public repositories and unlimited private repositories (with unlimited collaborators). Apart from this some other free services(there are much more but we list the main ones here) provided are :
 <ol>
<li><a href="https://github.com/features/actions">CI/CD</a>(Free for Public Repos, 2000 min/month for private repos free)</li>
<li><a href="https://pages.github.com">Static Website Hosting</a> (Free for Public Repos)</li>
<li><a href="https://github.com/features/packages">Package Hosting &amp; Container Registry</a> (Free for public repos,500 MB storage &amp; 1GB bandwidth outside CI/CD free for private repos)</li>
<li>Project Management &amp; Issue Tracking.</li>
 </ol></li>
<li><a href="https://about.gitlab.com/">gitlab.com</a> — Unlimited public and private Git repos with unlimited collaborators. Also offers the following features :
 <ol>
<li><a href="https://about.gitlab.com/product/continuous-integration">CI/CD</a> (Free for Public Repos, 400 mins/month for private repos)</li>
<li>Static Sites with <a href="https://about.gitlab.com/product/pages">GitLab Pages</a>.</li>
<li>Container Registry with 10 GB limit per repo.</li>
<li>Project Management &amp; Issue Tracking.</li>
 </ol></li>
<li><a href="https://foss.heptapod.net/">heptapod.net</a> — Heptapod is a friendly fork of GitLab Community Edition providing support for Mercurial</li>
<li><a href="https://ionicframework.com/appflow">ionicframework.com</a> - Repo and tools to develop applications with Ionic, also you have an ionic repo</li>
<li><a href="https://notabug.org">NotABug</a> — NotABug.org is a free-software code collaboration platform for freely licensed projects, Git-based</li>
<li><a href="https://osdn.net/">OSDN</a> - OSDN.net is a free-of-charge service for open source software developers, offering SVN/Git/Mercurial/Bazaar/CVS repositories and more.</li>
<li><a href="https://pagure.io">Pagure.io</a> — Pagure.io is a free and open source software code collaboration platform for FOSS-licensed projects, Git-based</li>
<li><a href="https://www.perforce.com/products/helix-teamhub">perforce.com</a> — Free 1GB Cloud and Git, Mercurial, or SVN repositories.</li>
<li><a href="https://pijul.com/">pijul.com</a> - Unlimited free and open source distributed version control system. Its distinctive feature is to be based on a sound theory of patches, which makes it easy to learn and use, and really distributed. Solves many problems of git/hg/svn/darcs.</li>
<li><a href="https://plasticscm.com/">plasticscm.com</a> — Free for individuals, OSS and nonprofit organizations</li>
<li><a href="https://projectlocker.com">projectlocker.com</a> — One free private project (Git and Subversion) with 50 MB space</li>
<li><a href="https://rocketgit.com">RocketGit</a> — Repository Hosting based on Git. Unlimited Public &amp; Private repositories.</li>
<li><a href="https://savannah.gnu.org/">savannah.gnu.org</a> - Serves as a collaborative software development management system for free Software projects (for GNU Projects)</li>
<li><a href="https://savannah.nongnu.org/">savannah.nongnu.org</a> - Serves as a collaborative software development management system for free Software projects (for non-GNU projects)</li>
 </ol>
 
<h2 id="apis-data-and-ml">APIs, Data and ML</h2>
 <ol>
<li><a href="https://ip.city">IP.City</a> — 100 free IP geolocation requests per day</li>
<li><a href="https://www.abstractapi.com">Abstract API</a> — API suite for a variety of use cases including IP geolocation, gender detection or even email validation.</li>
<li><a href="https://algorithmia.com/">algorithmia.com</a> — Host algorithms for free. Includes free monthly allowance for running algorithms. Now with CLI support.</li>
<li><a href="https://www.apify.com/">Apify</a> — Web scraping and automation platform to create an API for any website and extract data. Ready-made scrapers, integrated proxies, and custom solutions. Free plan with $5 platform credits included every month.</li>
<li><a href="https://apimocha.com">API Mocha</a> - Completely free online API mocking for testing and prototyping. Make up to 500 requests per day, fully customizable API responses, download mock rules as a Postman collection.</li>
<li><a href="https://apitemplate.io">APITemplate.io</a> - Auto-generate images and PDF documents with a simple API or automation tools like Zapier &amp; Airtable. No CSS/HTML required. Free plan comes with 50 images/month and 3 templates.</li>
<li><a href="https://atlastk.org/">Atlas toolkit</a> - Lightweight library to develop single-page web applications that are instantly accessible. Available for Java, Node.js, Perl, Python and Ruby.</li>
<li><a href="https://beeceptor.com">Beeceptor</a> - Mock a rest API in seconds, fake API response and much more. Free 50 requests per day, public dashboard, open endpoints (anyone having link to the dashboard can view requests and responses).</li>
<li><a href="https://bigml.com/">bigml.com</a> — Hosted machine learning algorithms. Unlimited free tasks for development, limit of 16 MB data/task.</li>
<li><a href="https://bruzu.com/">Bruzu</a> — Automate Image production. Generate tons of Image variants with API, Integrations or nocode sheet. API is FREE with watermark.</li>
<li><a href="https://calendarific.com">Calendarific</a> - Enterprise-grade Public holiday API service for over 200 countries. Free plan includes 1000 calls per month.</li>
<li><a href="https://www.clarifai.com">Clarifai</a> — Image API for custom face recognition and detection. Able to train AI models. Free plan has 5000 calls per month.</li>
<li><a href="https://cloudmersive.com/">Cloudmersive</a> — Utility API platform with full access to expansive API Library including Document Conversion, Virus Scanning, and more with 800 calls/month.</li>
<li><a href="https://colab.research.google.com">Colaboratory</a> — Free web-based Python notebook environment with Nvidia Tesla K80 GPU.</li>
<li><a href="https://collect2.com">Collect2</a> — Create an API endpoint to test, automate, and connect webhooks. Free plan allows for two datasets, 2000 records, 1 forwarder, and 1 alert.</li>
<li><a href="https://conversiontools.io/">Conversion Tools</a> - Online File Converter for documents, images, video, audio, eBooks. REST API is available. Libraries for Node.js, PHP, Python. Support files up to 50 GB (for paid plans). Free tier is limited by file size and number of conversions per day.</li>
<li><a href="https://www.coupler.io/">Coupler</a> - Data integration tool that syncs between apps. It can create live dashboards and reports, transform and manipulate values, collect and back up insights. The free plan has unlimited users, 100 runs with 1000 rows a month and unlimited integrations.</li>
<li><a href="https://craftmypdf.com">CraftMyPDF</a> - Auto-Generate PDF documents from reusable templates with a drop-and-drop editor and a simple API. Free plan comes with 100 PDFs/month and 3 templates.</li>
<li><a href="https://curlhub.io">CurlHub</a> — Proxy service for inspecting and debugging API calls. Free plan includes 10,000 requests per month.</li>
<li><a href="https://currencyscoop.com">CurrencyScoop</a> - Realtime currency data API for fintech apps. Free plan includes 5000 calls per month.</li>
<li><a href="https://www.dataimporter.io">Dataimporter.io</a> - Tool for connecting, cleaning, and importing data into Salesforce. Free Plan includes up to 20,000 records per month.</li>
<li><a href="https://datapane.com">Datapane</a> - API for building interactive reports in Python and deploying Python scripts and Jupyter Notebooks as self-service tools.</li>
<li><a href="https://www.dbdesigner.net/">DB Designer</a> — Cloud based Database schema design and modeling tool with a free starter plan of 2 Database models and 10 tables per model.</li>
<li><a href="https://developer.deepar.ai">DeepAR</a> — Augmented reality face filters for any platform with one SDK. Free plan provides up to 10 monthly active users (MAU) and tracking up to 4 faces</li>
<li><a href="https://deepnote.com">Deepnote</a> - A new kind of data science notebook. Jupyter-compatible with real-time collaboration and running in the cloud. Free tier includes unlimited personal projects, up to 750 hours of standard hardware and teams with up to 3 editors.</li>
<li><a href="https://www.diggernaut.com/">Diggernaut</a> — Cloud based web scraping and data extraction platform for turning any website to the dataset or to work with it as with an API. Free plan includes 5K page requests monthly.</li>
<li><a href="https://disease.sh/">Disease.sh</a> — A free API providing accurate data for building the Covid-19 related useful Apps.</li>
<li><a href="https://www.dominodatalab.com">dominodatalab.com</a> — Data science with support for Python, R, Spark, Hadoop, MATLAB and others.</li>
<li><a href="https://dreamfactory.com/">dreamfactory.com</a> — Open source REST API backend for mobile, web, and IoT applications. Hook up any SQL/NoSQL database, file storage system, or external service and it instantly creates a comprehensive REST API platform with live documentation, user management,…</li>
<li><a href="https://dynapictures.com">DynaPictures</a> - Design automation tool which lets you dynamically generate images over REST API. Change colors, texts, logos and images on the fly. Free plan includes 30 generated images per month and 3 image templates.</li>
<li><a href="https://efemarai.com">Efemarai</a> - Testing and debugging platform for ML models and data. Visualize any computational graph. Free 30 debugging sessions per month for developers.</li>
<li><a href="https://extendsclass.com/rest-client-online.html">ExtendsClass</a> - Free web-based HTTP client to send HTTP requests.</li>
<li><a href="https://exportsdk.com">Export SDK</a> - PDF generator API with drag and drop template editor that also provides an SDK and no-code integrations. Free plan comes with 250 pages per month, unlimited users and three templates.</li>
<li><a href="https://www.fraudlabspro.com">FraudLabs Pro</a> — Screen an order transaction for credit card payment fraud. This REST API will detect all possible fraud traits based on the input parameters of an order. Free Micro plan has 500 transactions per month.</li>
<li><a href="https://freegeoip.app/">FreeGeoIP.app</a> - Completely free Geo IP information (JSON, CSV, XML). No registration required, 15000 queries per hour rate limit.</li>
<li><a href="https://www.geodatasource.com">GeoDataSource</a> — Location search service lookup for city name by using latitude and longitude coordinate. Free API queries up to 500 times per month.</li>
<li><a href="https://glitterly.app/">Glitterly</a> - Programatically generate dynamic images from base templates. Restful API and nocode integrations. Free tier comes with 50 images/month and 5 templates.</li>
<li><a href="https://www.gooddata.com/">GoodData</a> - Data as a Service - Create interactive and insightful dashboards. Free tier comes with 5 workspaces and 100 MB/workspace.</li>
<li><a href="https://hookbin.com/">Hookbin</a> - Create unique (public or private) endpoints to collect, parse, and inspect HTTP requests. Inspect headers, body, query strings, cookies, uploaded files, etc. Useful for testing/inspecting webhook. Similar to RequestBin, and Webhook.site.</li>
<li><a href="https://hoppscotch.io">Hoppscotch</a> - A free, fast, and beautiful API request builder.</li>
<li><a href="https://hybiscus.dev/">Hybiscus</a> - Build pdf reports using a simple declarative API. Free tier includes upto 100 single page reports per month with the ability to customise color pallet and fonts.</li>
<li><a href="https://cloud.invantive.com/">Invantive Cloud</a> — Access over 70 (cloud)platforms such as Exact Online, Twinfield, ActiveCampaign or Visma using Invantive SQL or OData4 (typically Power BI or Power Query). Includes data replication and exchange. Free plan for developers and implementation consultants. Free for specific platforms with limitations in data volumes.</li>
<li><a href="https://ipaddress.sh">ipaddress.sh</a> — Simple service to get public IP address in different <a href="https://about.ipaddress.sh/">formats</a>.</li>
<li><a href="https://iploka.com/">Iploka</a> — IP to Geolocation API - Forever free plan for developers with 10k requests per month limit.</li>
<li><a href="https://ipgeolocation.io/">IP Geolocation</a> — IP Geolocation API - Forever free plan for developers with 30k requests per month (1k/day) limit.</li>
<li><a href="https://www.abstractapi.com/ip-geolocation-api">IP Geolocation API</a> — IP Geolocation API from Abstract - Extensive free plan allowing 200,000 requests per month.</li>
<li><a href="https://www.ip2location.com">IP2Location</a> — Freemium IP geolocation service. LITE database is available for free download. Import the database in server and perform local query to determine city, coordinates and ISP information.</li>
<li><a href="https://ipapi.co/">ipapi</a> - IP Address Location API by Kloudend, Inc - A reliable geolocation API, built on AWS, trusted by Fortune 500. Free tier offers 30k lookups/month (1k/day) without signup. Contact us for a higher limit trial plan.</li>
<li><a href="https://ipinfo.io/">IPinfo</a> — Fast, accurate, and free (up to 50k/month) IP address data API. Offers APIs with details on geolocation, companies, carriers, IP ranges, domains, abuse contacts, and more. All paid APIs can be trialed for free.</li>
<li><a href="https://ip-fast.com/">IPFast</a> — Find out your IP Address and related detailed information using the free, fastest and simple lookup tool.</li>
<li><a href="https://www.iplist.cc">IPList</a> — Lookup details about any IP address, such as Geo IP information, tor addresses, hostnames and ASN details. Free for personal and business users.</li>
<li><a href="https://www.bigdatacloud.com/">BigDataCloud</a> - Provides fast, accurate and free (Unlimited or up to 10K-50K/month) APIs for modern web like IP Geolocation, Reverse Geocoding, Networking Insights, Email and Phone Validation, Client Info and more.</li>
<li><a href="https://iptrace.io">IPTrace</a> — An embarrassingly simple API that provides reliable and useful IP geolocation data for your business.</li>
<li><a href="https://getjsonip.com">JSON IP</a> — Returns the Public IP address of the client it is requested from. No registration required for free tier. Using CORS data can be requested using client side JS directly from browser. Useful for services monitoring change in client and server IPs. Unlimited Requests.</li>
<li><a href="https://konghq.com/">konghq.com/</a> — API Marketplace and powerful tools for private and public APIs. With the free tier, some features are limited such as monitoring, alerting and support.</li>
<li><a href="https://kreya.app">Kreya</a> — Free gRPC GUI client to call and test gRPC APIs. Can import gRPC APIs via server reflection.</li>
<li><a href="https://api.ksoft.si/">KSoft.Si</a> — Free lyrics api chiefly aimed for discord bots.Also provides an extensive library of images and user data</li>
<li><a href="https://www.lightly.ai/">Lightly</a> — Improve your machine learning models by using the right data. Use datasets of up to 1’000 samples for free.</li>
<li><a href="https://www.mailboxvalidator.com">MailboxValidator</a> — Email verification service using real mail server connection to confirm valid email. Free API plan has 300 verifications per month.</li>
<li><a href="https://microlink.io/">microlink.io</a> – It turns any website into data such as metatags normalization, beauty link previews, scraping capabilities or screenshots as a service. 100 reqs/day every day free.</li>
<li><a href="https://monkeylearn.com/">monkeylearn.com</a> — Text analysis with machine learning, free 300 queries/month.</li>
<li><a href="https://www.mockapi.io/">MockAPI</a> — MockAPI is a simple tool that lets you easily mock up APIs, generate custom data, and preform operations on it using RESTful interface. MockAPI is meant to be used as a prototyping/testing/learning tool. 1 project/50 resources per project for free.</li>
<li><a href="https://mocki.io">Mocki</a> - A tool that lets you create mock GraphQL and REST APIs synced to a GitHub repository. Simple REST APIs are free to create and use without signup.</li>
<li><a href="https://mocko.dev/">Mocko.dev</a> — Proxy your API, choose which endpoints to mock in the cloud and inspect traffic, for free. Speed up your development and integrations tests.</li>
<li><a href="https://designer.mocky.io/">Mocky</a> - A simple web app to generate custom HTTP responses for mocking HTTP request. Also available as <a href="https://github.com/julien-lafont/Mocky">open source</a>.</li>
<li><a href="https://reqres.in">reqres.in</a> - A Free hosted REST-API ready to respond to your AJAX requests.</li>
<li><a href="https://microenv.com">microenv.com</a> — Create fake REST API for developers with possibility to generate code and app in docker container.</li>
<li><a href="https://neptune.ai/">neptune.ai</a> - Log, store, display, organize, compare and query all your MLOps metadata. Free for individuals: 1 member, 100 GB of metadata storage, 200h of monitoring/month</li>
<li><a href="https://newsapi.org">News API</a> — Search news on the web with code, get JSON results. Developers get 3,000 queries free each month.</li>
<li><a href="https://ocr.space/">OCR.Space</a> — An OCR API which parses image and pdf files returning the text results in JSON format. 25,000 requests per month free.</li>
<li><a href="https://duply.co">Duply.co</a> — Create dynamic images from API &amp; URL, design template once and reuse it. Free tier offers 70 images/month creation from API &amp; URL and Up to 100 through Form.</li>
<li><a href="https://openapidesigner.com/">OpenAPI3 Designer</a> — Visually create Open API 3 definitions for free.</li>
<li><a href="https://parsehub.com/">parsehub.com</a> — Extract data from dynamic sites, turn dynamic websites into APIs, 5 projects free.</li>
<li><a href="https://pixe.la/">Pixela</a> - Free daystream database service. All operations are performed by API. Visualization with heat maps and line graphs is also possible.</li>
<li><a href="https://postbacks.io/">Postbacks</a> - Request HTTP callbacks for a later time. 8,000 free requests on signup.</li>
<li><a href="https://postman.com">Postman</a> — Simplify workflows and create better APIs – faster – with Postman, a collaboration platform for API development. Use the Postman App for free forever. Postman cloud features are also free forever with certain limits.</li>
<li><a href="https://www.prefect.io/cloud/">PrefectCloud</a> — A complete platform for dataflow automation. All plans include 20,000 free runs every month. That’s enough to power ETL for most small businesses.</li>
<li><a href="https://proxycrawl.com/">ProxyCrawl</a> — Crawl and scrape websites without the need of proxies, infrastructure or browsers. We solve captchas for you and prevent you being blocked. The first 1000 calls are free of charge.</li>
<li><a href="https://github.com/public-apis/public-apis">Public-Apis Github Repo</a> — A list of free public APIs.</li>
<li><a href="http://supportivekoala.com/">Supportivekoala</a> — Allows you to autogenerate images by your input via templates. Free plan allows you to create up to 100 images per week.</li>
<li><a href="https://quickmocker.com/">QuickMocker</a> — Manage online fake API endpoints under your own subdomain, forward requests to localhost URL for webhooks development and testing, use RegExp and multiple HTTP methods for URL path, prioritize endpoints, more than 100 shortcodes (dynamic or fake response values) for response templating, import from OpenAPI (Swagger) Specifications in JSON format, proxy requests, restrict endpoint by IP address and authorization header. Free account provides 1 random subdomain, 10 endpoints, 5 RegExp URL paths, 50 shortcodes per endpoint, 100 requests per day, 50 history records in requests log.</li>
<li><a href="https://requestbin.com">RequestBin.com</a> — Create a free endpoint to which you can send HTTP requests. Any HTTP requests sent to that endpoint will be recorded with the associated payload and headers so you can observe requests from webhooks and other services.</li>
<li><a href="https://restlet.com/products/apispark/">restlet.com</a> — APISpark enables any API, application or data owner to become an API provider in minutes via an intuitive browser interface.</li>
<li><a href="https://roboflow.com">Roboflow</a> - create and deploy a custom computer vision model with no prior machine learning experience required. Free tier includes up to 1,000 free source images.</li>
<li><a href="https://robohash.org/">ROBOHASH</a> - Web service to generate unique (cool :) images from any text.</li>
<li><a href="https://scraper.ai">Scraper.AI</a> - SaaS that turns any website into a consumable API for you to build on. Free 50 extractions and 10000 API calls / month.</li>
<li><a href="https://scrapersproxy.com">Scraper’s Proxy</a> — Simple HTTP proxy API made for scraping. Scrape anonymously without having to worry about restrictions, blocks or captchas. First 100 successfully scrape’s per month free including javascript rendering (more available if you contact support).</li>
<li><a href="https://scrapingant.com/">ScrapingAnt</a> — Headless Chrome scraping API and free checked proxies service. Javascript rendering, premium rotating proxies, CAPTCHAs avoiding. Free plans available.</li>
<li><a href="https://scraperbox.com/">ScraperBox</a> — Undetectable web scraping API using real Chrome browsers and proxy rotation. Use a simple API call to scrape any web page. Free plan has 1000 requests per month.</li>
<li><a href="https://scrapingdog.com/">ScrapingDog</a> — Scrapingdog handles millions of proxies, browsers and CAPTCHAs to provide you with HTML of any web page in a single API call. It also provides Web Scraper for Chrome &amp; Firefox and a software for instant scraping demand. Free plans available.</li>
<li><a href="https://scrapinghub.com">scrapinghub.com</a> — Data scraping with visual interface and plugins. Free plan includes unlimited scraping on a shared server.</li>
<li><a href="https://www.scrapingninja.co/">ScrapingNinja</a> — Handle JS rendering, Chrome Headless, Proxy rotation and CAPTCHAs solving all in one place. The first 1000 are free of charge, no credit card required.</li>
<li><a href="https://sheetson.com">Sheetson</a> - Instantly turn any Google Sheets into RESTful API. Free plan available.</li>
<li><a href="https://shrtco.de/docs">shrtcode API</a> - Free URL Shortening API without authorization and no request limits.</li>
<li><a href="https://serpapi.com/">SerpApi</a> - Real-time search engine scraping API. Returns structured JSON results for Google, Youtube, Bing, Baidu, Walmart and many other engines. Free plan includes 100 successful API calls per month.</li>
<li><a href="https://word-simi.herokuapp.com/">Similar Words API</a> — An API to find similar words, has vocabulary of about 4Million words.</li>
<li><a href="https://www.sofodata.com/">Sofodata</a> - Create secure RESTful APIs from CSV files. Upload a CSV file and instantly access the data via its API allowing faster application development. Free plan includes 2 APIs and 2,500 API calls per month. No credit card required.</li>
<li><a href="https://tamber.com">tamber</a> — Put deep-learning powered recommendations in your app. Free 5k monthly active users.</li>
<li><a href="https://timedoor.io">Time Door</a> - A time series analysis API.</li>
<li><a href="https://www.tiny.cloud">TinyMCE</a> - rich text editing API. Core features free for unlimited usage.</li>
<li><a href="https://unixtime.co.za">Unixtime</a> - Free API to convert Unixtime to DateTime and vice versa.</li>
<li><a href="https://webhook.site">Webhook.site</a> - Easily test HTTP webhooks with this handy tool that displays requests instantly.</li>
<li><a href="https://wit.ai/">wit.ai</a> — NLP for developers.</li>
<li><a href="http://wolfram.com/language/">wolfram.com</a> — Built-in knowledge-based algorithms in the cloud.</li>
<li><a href="https://wrapapi.com/">wrapapi.com</a> — Turn any website into a parameterized API. 30k API calls per month.</li>
<li><a href="https://www.zenrows.com/">ZenRows</a> — Web Scraping API &amp; proxy server that bypasses any anti-bot solution while offering javascript rendering, rotating proxies, and geotargeting. Free tier of 1000 API calls.</li>
<li><a href="https://zenscrape.com/web-scraping-api">Zenscrape</a> — Web scraping API with headless browsers, residentials IPs and simple pricing. 1000 free API calls/month, extra free credits for students and non-profits.</li>
<li><a href="https://ip-api.com">ip-api</a> — IP Geolocation API, Free for non-commercial use, no API key required, limited to 45 req/minute from the same IP address for the free plan.</li>
<li><a href="https://webscraping.ai">WebScraping.AI</a> - Simple Web Scraping API with built-in parsing, Chrome rendering and proxies. 2000 free API calls per month.</li>
<li><a href="https://zipcodebase.com">Zipcodebase</a> - Free Zip Code API, access to Worldwide Postal Code Data. 10000 free requests/month.</li>
<li><a href="http://eva.pingutil.com/">EVA</a> - Free email validator API, which helps to identify whether an email is disposable and having valid MX records.</li>
<li><a href="https://happi.dev">happi.dev</a> - Freemium api services collection (Music, Exchange Rate, Key value store, Language Detection, Password Generator, QRCode Generator, Lyrics). 8000 free API calls per month.</li>
<li><a href="https://huggingface.co">huggingface.co</a> - Build, train and deploy NLP models for Pytorch, TensorFlow, and JAX. Free up to 30k input characters/mo.</li>
<li><a href="https://vatcheckapi.com">vatcheckapi.com</a> - Simple and free VAT number validation API. 500 free requests per month.</li>
<li><a href="https://numlookupapi.com">numlookupapi.com</a> - Free phone number validation API - 100k free requests / month.</li>
<li><a href="https://www.geojs.io/">geojs.io</a> - Highly available REST/JSON/JSONP IP Geolocation lookup API.</li>
 </ol>
 
<h2 id="artifact-repos">Artifact Repos</h2>
 <ol>
<li><a href="https://jfrog.com/start-free/">Artifactory</a> - An artifact repository that supports numerous package formats like Maven, Docker, Cargo, Helm, PyPI, CocoaPods, and GitLFS. Incudes package scanning tool XRay and CI/CD tool Pipelines (formerly Shippable) with a free tier of 2,000 CI/CD minutes per month.</li>
<li><a href="https://central.sonatype.org">central.sonatype.org</a> — The default artifact repository for Apache Maven, SBT and other build systems.</li>
<li><a href="https://cloudrepo.io">cloudrepo.io</a> - Cloud based, private and public, Maven and PyPi repositories. Free for open source projects.</li>
<li><a href="https://cloudsmith.io">cloudsmith.io</a> — Simple, secure and centralised repository service for Java/Maven, RedHat, Debian, Python, Ruby, Vagrant +more. Free tier + free for open source.</li>
<li><a href="https://jitpack.io/">jitpack.io</a> — Maven repository for JVM and Android projects on GitHub, free for public projects.</li>
<li><a href="https://packagecloud.io/users/new?plan=free_usage_plan">packagecloud.io</a> — Easy to use repository hosting for: Maven, RPM, DEB, PyPi, NPM, and RubyGem packages (has free tier).</li>
<li><a href="https://repsy.io">repsy.io</a> — 1 GB Free private/public Maven Repository.</li>
 </ol>
 
<h2 id="tools-for-teams-and-collaboration">Tools for Teams and Collaboration</h2>
 <ol>
<li><a href="https://3cols.com/">3Cols</a> - A free cloud based code snippet manager for personal and collaborative code.</li>
<li><a href="https://bitwarden.com">Bitwarden</a> — The easiest and safest way for individuals, teams, and business organizations to store, share, and sync sensitive data.</li>
<li><a href="https://www.braidchat.com/">Braid</a> — Chat app designed for teams. Free for public access group, unlimited users, history, and integrations. also it provide self-hostable open-source version.</li>
<li><a href="https://cally.com/">cally.com</a> — Find the perfect time and date for a meeting. Simple to use, works great for small and large groups.</li>
<li><a href="https://calendly.com">Calendly</a> — Calendly is the tool for connecting and scheduling meetings. Free plan provides 1 Calendar connection per user and Unlimited meetings. Desktop and Mobile apps also provided.</li>
<li><a href="https://discord.com/">Discord</a> — Chat with public/private rooms. Markdown text, voice, video, and screen sharing capabilities. Free for unlimited users.</li>
<li><a href="https://telegram.org/">Telegram</a> — Telegram is for everyone who wants fast and reliable messaging and calls. Business users and small teams may like the large groups, usernames, desktop apps and powerful file sharing options.</li>
<li><a href="https://duckly.com/">Duckly</a> — Talk and collaborate in real-time with your team. Pair programming with any IDE, terminal sharing, voice, video and screen sharing. Free for small teams.</li>
<li><a href="https://evernote.com/">evernote.com</a> — Tool for organizing information. Share your notes and work together with others</li>
<li><a href="https://fibery.io/">Fibery</a> — Connected workspace platform. Free for single user, up to 2 GB disk space.</li>
<li><a href="https://www.filestash.app">Filestash</a> — A Dropbox-like file manager that connects to a range of protocols and platforms: S3, FTP, SFTP, Minio, Git, WebDAV, Backblaze, LDAP and more.</li>
<li><a href="https://flock.com">flock.com</a> — A faster way for your team to communicate. Free Unlimited Messages, Channels, Users, Apps &amp; Integrations</li>
<li><a href="https://flowdash.com/">Flowdash</a> — Automate business workflows. Free tier for up to 3 users, 1000 tasks, and 3 workflows.</li>
<li><a href="https://www.flowdock.com/">flowdock.com</a> — Chat and inbox, free for teams up to 5</li>
<li><a href="https://gitdailies.com">GitDailies</a> - Daily reports of your team’s Commit and Pull Request activity on GitHub. Includes Push visualizer, peer recognition system, custom alert builder. Free tier has unlimited users, 3 repos, 3 alert configs.</li>
<li><a href="https://gitter.im/">gitter.im</a> — Chat, for GitHub. Unlimited public and private rooms, free for teams up to 25</li>
<li><a href="https://hangouts.google.com/">hangouts.google.com</a> — One place for all your conversations, for free, need a Google account</li>
<li><a href="https://hey.space">HeySpace</a> - Task management tool with chat, calendar, timeline and video calls. Free for up to 5 users.</li>
<li><a href="https://www.helplightning.com/">helplightning.com</a> — Help over video with augmented reality. Free without analytics, encryption, support</li>
<li><a href="https://ideascale.com/">ideascale.com</a> — Allow clients to submit ideas and vote, free for 25 members in 1 community</li>
<li><a href="https://www.igloosoftware.com/">Igloo</a> — Internal portal for sharing documents, blogs and calendars etc. Free for up to 10 users.</li>
<li><a href="https://keybase.io/">Keybase</a> — Keybase is a cool FOSS alternative to Slack, it keeps everyone’s chats and files safe, from families to communities to companies.</li>
<li><a href="https://meet.google.com/">Google Meet</a> — Use Google Meet for your business’s online video meeting needs. Meet provides secure, easy-to-join online meetings.</li>
<li><a href="https://meetslack.com">/meet for Slack</a> - Start Google Meetings directly from Slack by using /meet in any channel, group or DM. Free without any limitations.</li>
<li><a href="https://www.markup.io/">MarkUp</a> — MarkUp lets you collect feedback directly on top of your websites, PDFs and images.</li>
<li><a href="https://meet.jit.si/">meet.jit.si</a> — One click video conversations, screen sharing, for free</li>
<li><a href="https://products.office.com/microsoft-teams/free">Microsoft Teams</a> — Microsoft Teams is a chat-based digital hub that brings conversations, content, and apps together in one place all from a single experience. Free for up to 500k users.</li>
<li><a href="https://miro.com/">Miro</a> - Scalable, secure, cross-device and enterprise-ready team collaboration whiteboard for distributed teams. With freemium plan.</li>
<li><a href="https://www.nootiz.com/">nootiz</a> - The go-to tool for gathering and managing visual feedback on any website</li>
<li><a href="https://www.notion.so/">Notion</a> - Notion is a note-taking and collaboration application with markdown support that also integrates tasks, wikis, and databases. The company describes the app as an all-in-one workspace for note-taking, project management and task management. In addition to cross-platform apps, it can be accessed via most web browsers.</li>
<li><a href="https://www.nuclino.com">Nuclino</a> - A lightweight and collaborative wiki for all your team’s knowledge, docs, and notes. Free plan with all essential features, up to 50 items, 5GB total storage.</li>
<li><a href="https://www.pageshare.dev">PageShare.dev</a> - Adds visual reviews capabilities into GitHub Pull Requests with no need to deploy websites. Free for up to 10 pages each month and 100MB of storage in total.</li>
<li><a href="https://pendulums.io/">Pendulums</a> - Pendulums is a free time tracking tool which helps you to manage your time in a better manner with an easy to use interface and useful statistics.</li>
<li><a href="https://raindrop.io">Raindrop.io</a> - Private and secure bookmarking app for macOS, Windows, Android, iOS and Web. Free Unlimited Bookmarks and Collaboration.</li>
<li><a href="https://element.io/">element.io</a> — A decentralized and open source communication tool built on Matrix. Group chats, direct messaging, encrypted file transfers, voice and video chats, and easy integration with other services.</li>
<li><a href="https://rocket.chat/">Rocket.Chat</a> - Shared inbox for teams, secure, unlimited and open source.</li>
<li><a href="https://www.seafile.com/">seafile.com</a> — Private or cloud storage, file sharing, sync, discussions. Private version is full. Cloud version has just 1 GB</li>
<li><a href="https://slab.com/">Slab</a> — A modern knowledge management service for teams. Free for up to 10 users.</li>
<li><a href="https://slack.com/">slack.com</a> — Free for unlimited users with some feature limitations</li>
<li><a href="https://spectrum.chat/">Spectrum</a> - Create public or private communities for free.</li>
<li><a href="https://www.statuspile.com/">StatusPile</a> - A status page of status pages. Track the status pages of your upstream providers.</li>
<li><a href="https://talky.io/">talky.io</a> — Free group video chat. Anonymous. Peer‑to‑peer. No plugins, signup, or payment required</li>
<li><a href="https://tefter.io">Tefter</a> - Bookmarking app with a powerful Slack integration. Free for open-source teams.</li>
<li><a href="https://teletype.oorja.io/">TeleType</a> — share terminals, voice, code, whiteboard and more. no sign-in required, end-to-end encrypted collaboration for developers.</li>
<li><a href="https://www.timecamp.com/">TimeCamp</a> - Free time tracking software for unlimited users. Easily integrates with PM tools like Jira, Trello, Asana, etc.</li>
<li><a href="https://treeschema.com/">Tree Schema</a> — Data catalog and metadata management with APIs to manage data lineage as code. Free for teams of up to 5 users.</li>
<li><a href="https://twist.com">twist.com</a> — An asynchronous-friendly team communication app where conversations stay organized and on-topic. Free and Unlimited plans available. Discounts provided for eligible teams.</li>
<li><a href="https://bookmarkos.com">BookmarkOS.com</a> - Free all-on-one bookmark manager, tab manager, and task manager in a customizable online desktop with folder collaboration.</li>
<li><a href="https://www.typetalk.com/">typetalk.com</a> — Share and discuss ideas with your team through instant messaging on the web or on your mobile</li>
<li><a href="https://tugboat.qa">Tugboat</a> - Preview every pull request, automated and on-demand. Free for all, complimentary Nano tier for non-profits.</li>
<li><a href="https://whereby.com/">whereby.com</a> — One click video conversations, for free (formerly known as appear.in)</li>
<li><a href="https://vadoo.tv/">vadoo.tv</a> — Video hosting and marketing made simple. Upload videos with a single click. Record, manage, share &amp; more. Free tier provides upto 10 videos, 1 GB storage, 10 GB bandwidth/month</li>
<li><a href="https://vvv.space/">vspace</a> — Free links manager with private/public spaces, includes slack and google docs integration and chrome plugin.</li>
<li><a href="https://userforge.com/">userforge.com</a> - Interconnected online personas, user stories and context mapping. Helps keep design and dev in sync, free for up to 3 personas and 2 collaborators.</li>
<li><a href="https://wistia.com/">wistia.com</a> — Video hosting with viewer analytics, HD video delivery and marketing tools to help understand your visitors, 25 videos and Wistia branded player</li>
<li><a href="https://www.wormhol.org/">wormhol.org</a> — Straightforward file sharing service. Share unlimited files up to 5GB to as many peers as you want.</li>
<li><a href="https://zoom.us/">zoom.us</a> — Secure Video and Web conferencing, add-ons available. Free limited to 40 minutes</li>
<li><a href="https://shtab.app/">shtab.app</a> - Project management service that makes collaboration in the office and remotely transparent with tracker based on AI.</li>
<li><a href="https://www.zdoo.co">zdoo.co</a> — With CRM, OA, and Project management suites, zdoo is so powerful for team collaboration. Free cloud version with limited users and space offered, one-month free trial for premium versions.</li>
<li><a href="https://zulip.com/">Zulip</a> — Real-time chat with unique email-like threading model. Free plan includes 10,000 messages of search history and File storage up to 5 GB. also it provides self-hostable open-source version.</li>
<li><a href="https://automate.io">Automate.io</a> - Simple and complex automation workflow tool with over 200+ app integrations. 300 monthly actions and 5 bots are free</li>
<li><a href="https://robocorp.com">robocorp.com</a> - Open-source stack for powering Automation Ops. Try out Cloud features and implement simple automations for free. Robot work 240 min/month, 10 Assistant runs, Storage of 100 MB.</li>
<li><a href="https://fleep.io/">Fleep.io</a> — Fleep an alternative to Slack. It has a free plan for small teams with full message history, unlimited 1:1 conversations, 1 group conversation and 1 GB file storage.</li>
<li><a href="https://chanty.com/">Chanty.com</a> — Chanty is another alternative to Slack. It has a free forever plan for small teams (up to 10) with unlimited public and private conversations, searchable history, unlimited 1:1 audio calls, unlimited voice messages, 10 integrations and 20 GB storage per team.</li>
 </ol>
 
<h2 id="cms">CMS</h2>
 <ol>
<li><a href="https://www.acquia.com/">acquia.com</a> — Hosting for Drupal sites. Free tier for developers. Free development tools (such as Acquia Dev Desktop) also available</li>
<li><a href="https://www.contentful.com/">Contentful</a> — Headless CMS. Content management and delivery APIs in the cloud. Comes with one free Community space that includes 5 users, 25K records, 48 Content Types, 2 locales.</li>
<li><a href="https://www.cosmicjs.com/">Cosmic</a> — Headless CMS and API toolkit. Free personal plans for developers.</li>
<li><a href="https://crystallize.com">Crystallize</a> — Headless PIM with ecommerce support. Built-in GraphQL API. Free version includes unlimited users, 1000 catalogue items, 5 GB/month bandwidth and 25k/month API calls.</li>
<li><a href="https://www.datocms.com/">DatoCMS</a> - Offers free tier for small projects. DatoCMS is a GraphQL based CMS. On the lower tier you have 100k/month calls.</li>
<li><a href="https://directus.io">Directus</a> — Headless CMS. A completely free and open-source platform for managing assets and database content on-prem or in the Cloud. No limitations or paywalls.</li>
<li><a href="https://forestry.io/">Forestry.io/</a> — Headless CMS. Give your editors the power of Git. Create and edit Markdown-based content with ease. Comes with three free sites that includes 3 editors, Instant Previews. Integrates with blogs hosted on Netlify/GitHubpages/ elsewhere</li>
<li><a href="https://frontaid.io/">FrontAid</a> — Headless CMS that stores JSON content directly in your own Git repository. No restrictions.</li>
<li><a href="https://www.kontent.ai">kontent.ai</a> - A Content-as-a-Service platform that gives you all the headless CMS benefits while empowering marketers at the same time. Developer plan provides 2 users with unlimited projects with 2 environments for each, 500 content items, 2 languages with Delivery and Management API, and Custom elements support. Larger plans available to meet your needs.</li>
<li><a href="https://www.prismic.io/">Prismic</a> — Headless CMS. Content management interface with fully hosted and scalable API. The Community Plan provides 1 user with unlimited API calls, documents, custom types, assets, and locales. Everything that you need for your next project. Bigger free plans available for Open Content/Open Source projects.</li>
<li><a href="https://www.sanity.io/">Sanity.io</a> - Platform for structured content that comes with an open-source editing environment and a real-time hosted data store. Unlimited projects. Unlimited admin users, 3 non-admin users, 2 datasets, 500K API CDN requests, 10GB bandwidth, 5GB assets included for free per project.</li>
<li><a href="https://sensenet.com">sensenet</a> - API-first headless CMS providing enterprise-grade solutions for businesses of all size. The Developer plan provides 3 users, 500 content items, 3 built-in roles, 25+5 content types, fully accessible REST API, document preview generation and Office Online editing.</li>
<li><a href="https://graphcms.com/">GraphCMS</a> - Offers free tier for small projects. GraphQL first API. Move away from legacy solutions to the GraphQL native Headless CMS - and deliver omnichannel content API first.</li>
<li><a href="https://squidex.io/">Squidex</a> - Offers free tier for small projects. API / GraphQL first. Open source, and based on event sourcing (versing every changes automatically).</li>
 </ol>
 
<h2 id="code-quality">Code Quality</h2>
 <ol>
<li><a href="https://www.softacheck.com/">SoftaCheck</a> — An online tool that performs static analysis for C/C++ code using open source tools such as cppcheck and clang-tidy and automatically generates code documentation for users using doxygen. This tool is free for use.</li>
<li><a href="https://beanstalkapp.com/">beanstalkapp.com</a> — A complete workflow to write, review and deploy code), free account for 1 user and 1 repository with 100 MB of storage</li>
<li><a href="https://www.browserling.com/">browserling.com</a> — Live interactive cross-browser testing, free only 3 minutes sessions with MS IE 9 under Vista at 1024 x 768 resolution</li>
<li><a href="https://www.codacy.com/">codacy.com</a> — Automated code reviews for PHP, Python, Ruby, Java, JavaScript, Scala, CSS and CoffeeScript, free for unlimited public and private repositories</li>
<li><a href="https://www.codeac.io/infrastructure-as-code.html?ref=free-for-dev">Codeac.io</a> - Automated Infrastructure as Code review tool for DevOps integrates with GitHub, Bitbucket and GitLab (even self-hosted). In addition to standard languages, it analyzes also Ansible, Terraform, CloudFormation, Kubernetes, and more. (open-source free)</li>
<li><a href="https://codebeat.co">CodeBeat</a> — Automated Code Review Platform available for many languages. Free forever for public repositories with Slack &amp; E-mail integration.</li>
<li><a href="https://codeclimate.com/">codeclimate.com</a> — Automated code review, free for Open Source and unlimited organisation-owned private repos (up to 4 collaborators). Also free for students and institutions.</li>
<li><a href="https://codecov.io/">codecov.io</a> — Code coverage tool (SaaS), free for Open Source and 1 free private repo</li>
<li><a href="https://www.codefactor.io">CodeFactor</a> — Automated Code Review for Git. Free version includes unlimited users, unlimited public repositories and 1 private repo.</li>
<li><a href="https://codescene.io/">codescene.io</a> - CodeScene prioritizes technical debt based on how the developers work with the code and visualizes organizational factors like team coupling and system mastery. Free for Open Source.</li>
<li><a href="https://coveralls.io/">coveralls.io</a> — Display test coverage reports, free for Open Source</li>
<li><a href="https://dareboost.com">dareboost</a> - 5 free analysis report for web performance, accessibility, security each month</li>
<li><a href="https://www.deepcode.ai">deepcode.ai</a> — DeepCode finds bugs, security vulnerabilities, performance and API issues based on AI. DeepCode’s speed of analysis allow us to analyse your code in real time and deliver results when you hit the save button in your IDE. Supported languages are Java, C/C++, JavaScript, Python, and TypeScript. Integrations with GitHub, BitBucket and GitLab. Free for open source and private repos, free up to 30 developers.</li>
<li><a href="https://deepscan.io">deepscan.io</a> — Advanced static analysis for automatically finding runtime errors in JavaScript code, free for Open Source</li>
<li><a href="https://deepsource.io/">DeepSource</a> - DeepSource continuously analyzes source code changes, finds and fixes issues categorized under security, performance, anti-patterns, bug-risks, documentation and style. Native integration with GitHub, GitLab and Bitbucket.</li>
<li><a href="https://www.eversql.com/">eversql.com</a> — EverSQL - The #1 platform for database optimization. Gain critical insights into your database and SQL queries, auto-magically.</li>
<li><a href="https://review.gerrithub.io/">gerrithub.io</a> — Gerrit code review for GitHub repositories for free</li>
<li><a href="https://gocover.io/">gocover.io</a> — Code coverage for any <a href="https://golang.org/">Go</a> package</li>
<li><a href="https://goreportcard.com/">goreportcard.com</a> — Code Quality for Go projects, free for Open Source</li>
<li><a href="https://gtmetrix.com/">gtmetrix.com</a> — Reports and thorough recommendations to optimize websites</li>
<li><a href="https://holistic.dev/">holistic.dev</a> - The #1 static code analyzer for Postgresql optimization. Performance, security, and architect database issues automatic detection service</li>
<li><a href="https://houndci.com/">houndci.com</a> — Comments on GitHub commits about code quality, free for Open Source</li>
<li><a href="https://github.com/marketplace/imgbot">Imgbot</a> — Imgbot is a friendly robot that optimizes your images and saves you time. Optimized images mean smaller file sizes without sacrificing quality. It’s free for open source.</li>
<li><a href="https://kritika.io/">Kritika</a> — Static Code Analysis for Perl with integration for GitHub. Free for unlimited public repositories.</li>
<li><a href="https://resmush.it">resmush.it</a> — reSmush.it is a FREE API that provides image optimization. reSmush.it has been implemented on the most common CMS such as Wordpress, Drupal or Magento. reSmush.it is the most used image optimization API with more than 7 billions images already treated, and is still Free of charge.</li>
<li><a href="https://insight.sensiolabs.com/">insight.sensiolabs.com</a> — Code Quality for PHP/Symfony projects, free for Open Source</li>
<li><a href="https://lgtm.com">lgtm.com</a> — Continuous security analysis for Java, Python, JavaScript, TypeScript, C#, C and C++, free for Open Source</li>
<li><a href="https://app.moderne.io">Moderne.io</a> — Automatic source code refactoring. Moderne offers framework migrations, code analysis with remediation, and unrivaled code transformation at scale, so developers can spend their time building new things instead of maintaining the old. Free for Open Source.</li>
<li><a href="https://reviewable.io/">reviewable.io</a> — Code review for GitHub repositories, free for public or personal repos</li>
<li><a href="https://parsers.dev/">parsers.dev</a> - Abstract syntax tree parsers and intermediate representation compilers as a service</li>
<li><a href="https://scan.coverity.com/">scan.coverity.com</a> — Static code analysis for Java, C/C++, C# and JavaScript, free for Open Source</li>
<li><a href="https://scrutinizer-ci.com/">scrutinizer-ci.com</a> — Continuous inspection platform, free for Open Source</li>
<li><a href="https://shields.io">shields.io</a> — Quality metadata badges for open source projects</li>
<li><a href="https://sider.review">Sider</a> — Code review platform for many languages. Supports integration with GitHub. Free for public repositories with unlimited users.</li>
<li><a href="https://sonarcloud.io">sonarcloud.io</a> — Automated source code analysis for Java, JavaScript, C/C++, C#, VB.NET, PHP, Objective-C, Swift, Python, Groovy and even more languages, free for Open Source</li>
<li><a href="https://sourcelevel.io/">SourceLevel</a> — Automated Code Review and Team Analytics. Free for Open Source and organizations up to 5 collaborators.</li>
<li><a href="https://github.com/marketplace/typo-ci">Typo CI</a> — Typo CI reviews your Pull Requests and commits for spelling mistakes, free for Open Source.</li>
<li><a href="https://viezly.com/">Viezly</a> - Enhanced code review tool for easier code reading and navigation. Free for Open Source and free for personal usage.</li>
<li><a href="https://www.webceo.com/">webceo.com</a> — SEO tools but with also code verifications and different type of advices</li>
<li><a href="https://zoompf.com/">zoompf.com</a> — Fix the performance of your web sites, detailed analysis</li>
 </ol>
 
<h2 id="code-search-and-browsing">Code Search and Browsing</h2>
 <ol>
<li><a href="https://www.codota.com/">codota.com</a> — Codota helps developers create better software, faster by providing insights learned from all the code in the world. Plugin available.</li>
<li><a href="https://libraries.io/">libraries.io</a> — Search and dependency update notifications for 32 different package managers, free for open source</li>
<li><a href="https://namae.dev/">Namae</a> - Search across various websites like github,gitlab,heroku,netlify and many more for availabilty of your project name.</li>
<li><a href="https://searchcode.com/">searchcode.com</a> — Comprehensive text-based code search, free for Open Source</li>
<li><a href="https://about.sourcegraph.com/">sourcegraph.com</a> — Java, Go, Python, Node.js, etc., code search/cross-references, free for Open Source</li>
<li><a href="https://www.tickgit.com/">tickgit.com</a> — Surfaces <code>TODO</code> comments (and other markers) to identify areas of code worth returning to for improvement.</li>
<li><a href="https://codekeep.io">CodeKeep</a> - Google Keep for Code Snippets. Organize,Discover and share code snippets, featuring a powerful code screenshot tool with preset templates and linking feature.</li>
 </ol>
 
<h2 id="ci-and-cd">CI and CD</h2>
 <ol>
<li><a href="https://github.com/marketplace/accesslint">AccessLint</a> — AccessLint brings automated web accessibility testing into your development workflow. It’s free for open source and education purposes.</li>
<li><a href="https://appcircle.io">appcircle.io</a> — Automated mobile CI/CD/CT for iOS and Android with online device emulators. 20 minutes build timeout (60 mins for Open Source) with single concurrency for free.</li>
<li><a href="https://www.appveyor.com/">appveyor.com</a> — CD service for Windows, free for Open Source</li>
<li><a href="https://www.bitrise.io/">bitrise.io</a> — A CI/CD for mobile apps, native or hybrid. With 200 free builds/month 10 min build time and two team members. OSS projects get 45 min build time, +1 concurrency and unlimited team size.</li>
<li><a href="https://buddy.works/">buddy.works</a> — A CI/CD with 5 free projects and 1 concurrent runs (120 executions/month)</li>
<li><a href="https://www.buddybuild.com/">buddybuild.com</a> — Build, deploy and gather feedback for your iOS and Android apps in one seamless, iterative system</li>
<li><a href="https://circleci.com/">circleci.com</a> — Free for one concurrent build</li>
<li><a href="https://cirrus-ci.org">cirrus-ci.org</a> - Free for public GitHub repositories</li>
<li><a href="https://codefresh.io">codefresh.io</a> — Free-for-Life plan: 1 build, 1 environment, shared servers, unlimited public repos</li>
<li><a href="https://codemagic.io/">codemagic.io</a> - Free 500 build minutes/month</li>
<li><a href="https://codeship.com/">codeship.com</a> — 100 private builds/month, 5 private projects, unlimited for Open Source</li>
<li><a href="https://continuousphp.com/">Continuous PHP</a> — continuousphp is the first and only PHP-centric Platform to build, package, test and deploy applications in the same workflow. Free for Community Projects i.e. OSS/Public/Educational projects.</li>
<li><a href="https://www.deployhq.com/">deployhq.com</a> — 1 project with 10 daily deployments (30 build minutes/month)</li>
<li><a href="https://cloud.drone.io/">drone</a> - Drone Cloud enables developers to run Continuous Delivery pipelines across multiple architectures - including x86 and Arm (both 32 bit and 64 bit) - all in one place</li>
<li><a href="https://layerci.com">LayerCI</a> — CI for full stack projects. 1 full stack preview environment with 5GB memory &amp; 3 CPUs .</li>
<li><a href="https://github.com/ligurio/awesome-ci">ligurio/awesome-ci</a> — Comparison of Continuous Integration services</li>
<li><a href="https://octopus.com">Octopus Deploy</a> - Automated deployment and release-management. Free for &lt;= 10 deployment targets.</li>
<li><a href="https://scalr.com/">scalr.com</a> - Remote state &amp; operations backend for Terraform with full CLI support, integration with OPA and a hierarchical configuration model. Free up to 5 users.</li>
<li><a href="https://semaphoreci.com/">semaphoreci.com</a> — Free for Open Source, 100 private builds per month</li>
<li><a href="https://www.squash.io/">Squash Labs</a> — creates a VM for each branch and makes your app available from a unique URL, Unlimited public &amp; private repos, Up to 2 GB VM Sizes.</li>
<li><a href="https://stackahoy.io">stackahoy.io</a> — 100% free. Unlimited deployments, branches and builds</li>
<li><a href="https://styleci.io/">styleci.io</a> — Public GitHub repositories only</li>
<li><a href="https://mergify.io">Mergify</a> — workflow automation and merge queue for GitHub — Free for public GitHub repositories</li>
<li><a href="https://www.integromat.com">Integromat</a> — Workflow automation tool which lets you connect apps and automate workflows using UI, it supports many apps and most popular APIs. Free for public GitHub repositories, and free tier with 100 Mb, 1000 Operations and 15 minutes of minimum interval.</li>
 </ol>
 
<h2 id="testing">Testing</h2>
 <ol>
<li><a href="https://applitools.com/">Applitools.com</a> — Smart visual validation for web, native mobile and desktop apps. Integrates with almost all automation solutions (like Selenium and Karma) and remote runners (Sauce Labs, Browser Stack). free for open source. A free tier for a single user with limited checkpoints per week.</li>
<li><a href="https://appetize.io">Appetize</a> — Test your Android &amp; iOS apps on this Cloud Based Android Phone/Tablets emulators and iPhone/iPad simulators directly in your browser. Free tier includes 1 concurrent session with 100 minutes usage per month. No limit on app size.</li>
<li><a href="https://www.birdeatsbug.com/">Bird Eats Bug</a> — Report bugs faster (and better). Record your screen with Bird browser extension, it will auto-capture technical data that engineers need to debug. Free tier suitable for small teams.</li>
<li><a href="https://www.lambdatest.com/">lambdatest.com</a> — Manual, visual, screenshot and automated browser testing on selenium and cypress, <a href="https://www.lambdatest.com/open-source-cross-browser-testing-tool">free for Open Source</a></li>
<li><a href="https://www.browserstack.com/">browserstack.com</a> — Manual and automated browser testing, <a href="https://www.browserstack.com/open-source?ref=pricing">free for Open Source</a></li>
<li><a href="https://www.checkbot.io/">checkbot.io</a> — Browser extension that tests if your website follows 50+ SEO, speed and security best practices. Free tier for smaller websites.</li>
<li><a href="https://checklyhq.com">checklyhq.com</a> - Checkly is the API &amp; E2E monitoring platform for the modern stack: programmable, flexible and loving JavaScript. Generous free tier for devs.</li>
<li><a href="https://crossbrowsertesting.com">crossbrowsertesting.com</a> - Manual, Visual, and Selenium Browser Testing in the cloud - <a href="https://crossbrowsertesting.com/open-source">free for Open Source</a></li>
<li><a href="https://www.cypress.io/">cypress.io</a> - Fast, easy and reliable testing for anything that runs in a browser. Cypress Test Runner is always free and open source with no restrictions and limitations. Cypress Dashboard is free for open source projects for up to 5 users.</li>
<li><a href="https://www.everystep-automation.com/">everystep-automation.com</a> — Records and replays all steps made in a web browser and creates scripts,… free with fewer options</li>
<li><a href="https://www.gremlin.com/gremlin-free-software">Gremlin</a> — Gremlin’s Chaos Engineering tools allow you to safely, securely, and simply inject failure into your systems to find weaknesses before they cause customer-facing issues. Gremlin Free provides access to Shutdown and CPU attacks on up to 5 hosts or containers.</li>
<li><a href="https://www.gridlastic.com/">gridlastic.com</a> — Selenium Grid testing with free plan up to 4 simultaneous selenium nodes/10 grid starts/4,000 test minutes/month</li>
<li><a href="https://www.loadmill.com/">loadmill.com</a> - Automatically create API and load tests by analyzing network traffic. Simulate up to 50 concurrent users for up to 60 minutes for free every month.</li>
<li><a href="https://percy.io">percy.io</a> - Add visual testing to any web app, static site, style guide, or component library. Unlimited team members, Demo app and unlimited projects, 5,000 snapshots / month.</li>
<li><a href="https://reflect.run">reflect.run</a> - Codeless automated tests for web apps. Tests can be scheduled in-app or executed from a CI/CD tool. Each test run includes a full video recording along with console and network logs. The free tier includes an unlimited number of saved tests, with 25 test runs per month and up to 3 users.</li>
<li><a href="https://saucelabs.com/">saucelabs.com</a> — Cross browser testing, Selenium testing and mobile testing, <a href="https://saucelabs.com/open-source">free for Open Source</a></li>
<li><a href="https://snippets.uilicious.com">snippets.uilicious.com</a> - It’s like CodePen, but for cross browser testing. UI-licious lets write tests like user stories, and offers a free platform - UI-licious Snippets - that allows you to run unlimited number of tests on Chrome for free with no sign up requred, for up to 3 minutes per test run. Found a bug? You can simply copy the unique url to your test to show your devs exactly how to reproduce the bug.</li>
<li><a href="https://testingbot.com/">testingbot.com</a> — Selenium Browser and Device Testing, <a href="https://testingbot.com/open-source">free for Open Source</a></li>
<li><a href="https://testspace.com/">Testspace.com</a> - A Dashboard for publishing automated test results and a Framework for implementing manual tests as code using GitHub. The service is <a href="https://github.com/marketplace/testspace-com">free for Open Source</a> accounts for 450 results per month.</li>
<li><a href="https://www.tesults.com">tesults.com</a> — Test results reporting and test case management. Integrates with popular test frameworks. Open Source software developers, individuals, educators, and small teams getting started can request discounted and free offerings beyond basic free project.</li>
<li><a href="https://www.websitepulse.com/tools/">websitepulse.com</a> — Various free network and server tools.</li>
<li><a href="https://qase.io">qase.io</a> - Test management system for Dev and QA teams. Manage test cases, compose test runs, perform test runs, track defects and measure impact. The free tier includes all core features, with 500Mb available for attachments and up to 3 users.</li>
<li><a href="https://knapsackpro.com">knapsackpro.com</a> - Speed up your tests with optimal test suite parallelisation on any CI provider. Split Ruby, JavaScript tests on parallel CI nodes to save time. Free plan for up to 10 minutes test files and free unlimited plan for Open Source projects.</li>
<li><a href="https://webhook.site">webhook.site</a> - Verify webhooks, outbound HTTP requests, or emails with a custom URL. Temporary URL and email address is always free.</li>
<li><a href="https://vaadin.com">Vaadin</a> — Build scalable UIs in Java or TypeScript, and use the integrated tooling, components and design system to iterate faster, design better and simplify the development process. Unlimited Projects with 5 years free maintenance.</li>
<li><a href="https://thundra.io/foresight">Foresight</a> — Thundra Foresight is a tool for debugging and troubleshooting test failures in no time and optimizing build duration and performance in your CI pipeline.</li>
 </ol>
 
<h2 id="security-and-pki">Security and PKI</h2>
 <ol>
<li><a href="https://www.alienvault.com/open-threat-exchange/reputation-monitor">alienvault.com</a> — Uncovers compromised systems in your network</li>
<li><a href="https://atomist.com/">atomist.com</a> — A quicker and more convenient way to automate a variety of development tasks. Now in beta.</li>
<li><a href="https://auth0.com/">auth0.com</a> — Hosted free for development SSO. Up to 2 social identity providers for closed-source projects.</li>
<li><a href="https://www.authgear.com">Authgear</a> - Bring Passwordless, OTPs, 2FA, SSO to your apps in minutes. All Front-end included. Free up to 5000 MAUs.</li>
<li><a href="https://authress.io/">Authress</a> — Authentication login and access control, unlimited identity providers for any project. Facebook, Google, Twitter and more. First 1000 API calls are free.</li>
<li><a href="https://authy.com">Authy</a> - Two-factor authentication (2FA) on multiple devices, with backups. Drop-in replacement for Google Authenticator. Free for up to 100 successful authentications.</li>
<li><a href="https://bridgecrew.io/">Bridgecrew</a> — Infrastructure as code (IaC) security powered by the open source tool - <a href="https://github.com/bridgecrewio/checkov">Checkov</a>. The core Bridgecrew platform is free for up to 50 IaC resources.</li>
<li><a href="https://cloudsploit.com/">cloudsploit.com</a> — Amazon Web Services (AWS) security and compliance auditing and monitoring</li>
<li><a href="https://cmd.com/">Cmd</a> — Security platform providing real-time access control and dynamic policy enforcement on every Linux instance in your cloud or datacenter</li>
<li><a href="https://www.codenotary.io/">CodeNotary.io</a> — Open Source platform with indelible proof to notarize code, files, directories or container</li>
<li><a href="https://www.crypteron.com/">crypteron.com</a> — Cloud-first, developer-friendly security platform prevents data breaches in .NET and Java applications</li>
<li><a href="https://www.datree.io/">Datree</a> — Open Source CLI tool to prevent Kubernetes misconfigurations by ensuring that manifests and Helm charts follow best practices as well as your organization’s policies</li>
<li><a href="https://dependabot.com/">Dependabot</a> Automated dependency updates for Ruby, JavaScript, Python, PHP, Elixir, Rust, Java (Maven and Gradle), .NET, Go, Elm, Docker, Terraform, Git Submodules and GitHub Actions.</li>
<li><a href="https://djcheckup.com">DJ Checkup</a> — Scan your Django site for security flaws with this free, automated, checkup tool. Forked from the Pony Checkup site.</li>
<li><a href="https://doppler.com/">Doppler</a> — Universal Secrets Manager for application secrets and config, with support for syncing to various cloud providers. Free for unlimited users with basic access controls.</li>
<li><a href="https://duo.com/">duo.com</a> — Two-factor authentication (2FA) for website or app. Free for 10 users, all authentication methods, unlimited, integrations, hardware tokens.</li>
<li><a href="https://www.gitguardian.com">GitGuardian</a> — Keep secrets out of your source code with automated secrets detection and remediation. Scan your git repos for 350+ types of secrets and sensitive files – Free for individuals and teams of 25 developers or less.</li>
<li><a href="https://www.globalsign.com/en/ssl/ssl-open-source/">globalsign.com</a> — Free SSL certificates for Open Source</li>
<li><a href="https://haveibeenpwned.com">Have I been pwned?</a> — REST API for fetching the information on the breaches.</li>
<li><a href="https://hostedscan.com">hostedscan.com</a> — Online vulnerability scanner for web applications, servers, and networks. 10 free scans per month.</li>
<li><a href="https://internet.nl">Internet.nl</a> — Test for modern Internet Standards like IPv6, DNSSEC, HTTPS, DMARC, STARTTLS and DANE</li>
<li><a href="https://jumpcloud.com/">Jumpcloud</a> — Provides directory as a service similar to Azure AD, user management, single sign-on, and RADIUS authentication. Free for up to 10 users.</li>
<li><a href="https://keychest.net">keychest.net</a> - SSL expiry management and cert purchase with an integrated CT database</li>
<li><a href="https://letsencrypt.org/">letsencrypt.org</a> — Free SSL Certificate Authority with certs trusted by all major browsers</li>
<li><a href="https://www.loginradius.com/">LoginRadius</a> — Managed User Authentication service for free. Email registration and 3 social providers.</li>
<li><a href="https://www.logintc.com/">logintc.com</a> — Two-factor authentication (2FA) by push notifications, free for 10 users, VPN, Websites and SSH</li>
<li><a href="https://www.meterian.io/">meterian.io</a> - Monitor Java, Javascript, .NET, Scala, Ruby and NodeJS projects for security vulnerabilities in dependencies. Free for one private project, unlimited projects for open source.</li>
<li><a href="https://mojoauth.com/">MojoAuth</a> - MojoAuth makes it easy to implement Passwordless authentication on your web, mobile or any application in minutes.</li>
<li><a href="https://observatory.mozilla.org/">Mozilla Observatory</a> — Find and fix security vulnerabilities in your site.</li>
<li><a href="https://developer.okta.com/">Okta</a> — User management, authentication and authorization. Free for up to 1000 monthly active users.</li>
<li><a href="https://www.onelogin.com/">onelogin.com</a> — Identity as a Service (IDaaS), Single Sign-On Identity Provider, Cloud SSO IdP, 3 company apps and 5 personal apps, unlimited users</li>
<li><a href="https://operous.dev/">Operous</a> — Cloud instance testing tool with a comprehensive and automated set of test-suites of best practices, performance, and security. Free tier offers 100 testing minutes, 10 Test Suites, and up to 5 instances to 1 user.</li>
<li><a href="https://www.opswat.com/">opswat.com</a> — Security Monitoring of computers, devices, applications, configurations,… Free 25 users and 30 days history users.</li>
<li><a href="https://pyup.io">pyup.io</a> — Monitor Python dependencies for security vulnerabilities and update them automatically. Free for one private project, unlimited projects for open source.</li>
<li><a href="https://www.qualys.com/community-edition">qualys.com</a> — Find web app vulnerabilities, audit for OWASP Risks</li>
<li><a href="https://recaptchame.com/">reCAPTCHAMe</a> — free reCAPTCHA and hCAPTCHA backend service. No Server-Side coding needed. Works for static websites.</li>
<li><a href="https://report-uri.io/">report-uri.io</a> — CSP and HPKP violation reporting</li>
<li><a href="https://ringcaptcha.com/">ringcaptcha.com</a> — Tools to use phone number as id, available for free</li>
<li><a href="https://sawolabs.com/">sawolabs.com</a> - Simplify login and improve user experience by integrating passwordless authentication in your app. 5000 free authentications per month.</li>
<li><a href="https://snyk.io">snyk.io</a> — Can find and fix known security vulnerabilities in your open source dependencies. Unlimited tests and remediation for open source projects. Limited to 200 tests/month for your private projects.</li>
<li><a href="https://www.ssllabs.com/ssltest/">ssllabs.com</a> — Very deep analysis of the configuration of any SSL web server</li>
<li><a href="https://www.stackhawk.com/">StackHawk</a> Automate application scanning throughout your pipeline to find and fix security bugs before they hit production. Unlimited scans and environments for a single app.</li>
<li><a href="https://sitecheck.sucuri.net">Sucuri SiteCheck</a> - Free website security check and malware scanner</li>
<li><a href="https://protectumus.com">Protectumus</a> - Free website security check, site antivirus and server firewall (WAF) for PHP. Email notifications for registered users in free tier.</li>
<li><a href="https://testtls.com">TestTLS.com</a> - Test a SSL/TLS service for secure server configuration, certificates, chains etc. Not limited to HTTPS.</li>
<li><a href="https://threatconnect.com">threatconnect.com</a> — Threat intelligence: It is designed for individual researchers, analysts and organizations who are starting to learn about cyber threat intelligence. Free up to 3 Users</li>
<li><a href="https://www.tinfoilsecurity.com/">tinfoilsecurity.com</a> — Automated vulnerability scanning. Free plan allows weekly XSS scans</li>
<li><a href="https://ubiqsecurity.com/">Ubiq Security</a> — Encrypt and decrypt data with 3 lines of code and automatic key management. Free for 1 application and up to 1,000,000 encryptions per month.</li>
<li><a href="https://virgilsecurity.com/">Virgil Security</a> — Tools and services for implementing end-to-end encryption, database protection, IoT security and more in your digital solution. Free for applications with up to 250 users.</li>
<li><a href="https://virushee.com/">Virushee</a> — Privacy-oriented file/data scanning powered by hybrid heuristic and AI-assisted engine. Possible to use internal dynamic sandbox analysis. Limited to 50MB per file upload</li>
<li><a href="https://warrant.dev/">Warrant</a> — Hosted enterprise-grade authorization and access control service for your apps. Free tier includes 5,000 API requests per month.</li>
<li><a href="https://escape.tech/quickscan">Escape GraphQL Quickscan</a> - One-click security scan of your GraphQL endpoints. Free, no login required.</li>
 </ol>
 
<h2 id="management-system">Management System</h2>
 <ol>
<li><a href="https://bitnami.com/">bitnami.com</a> — Deploy prepared apps on IaaS. Management of 1 AWS micro instance free</li>
<li><a href="https://esper.io">Esper</a> — MDM and MAM for Android Devices with DevOps. 100 devices free with 1 user license and 25 MB Application Storage.</li>
<li><a href="https://www.jamf.com/">jamf.com</a> — Device management for iPads, iPhones and Macs, 3 devices free</li>
<li><a href="https://miradore.com">Miradore</a> — Device Management service. Stay up-to-date with your device fleet and secure an unlimited number of devices for free. Free plan offers basic features.</li>
<li><a href="https://moss.sh">moss.sh</a> - Help developers deploy and manage their web apps and servers. Free up to 25 git deployments per month</li>
<li><a href="https://runcloud.io/">runcloud.io</a> - Server management focusing mainly on PHP projects. Free for up to 1 server.</li>
<li><a href="https://ploi.io/">ploi.io</a> - Server management tool to easily manage and deploy your servers &amp; sites. Free for 1 server.</li>
 </ol>
 
<h2 id="messaging-and-streaming">Messaging and Streaming</h2>
 <ol>
<li><a href="https://www.ably.com/">Ably</a> - Realtime messaging service with presence, persistence and guaranteed delivery. Free plan includes 3m messages per month, 100 peak connections and 100 peak channels.</li>
<li><a href="https://www.cloudamqp.com/">cloudamqp.com</a> — RabbitMQ as a Service. Little Lemur plan: max 1 million messages/month, max 20 concurrent connections, max 100 queues, max 10,000 queued messages, multiple nodes in different AZ’s</li>
<li><a href="https://connectycube.com">connectycube.com</a> - Unlimited chat messages, p2p voice &amp; video calls, files attachments and push notifications. Free for apps up to 20K MAU.</li>
<li><a href="https://www.courier.com/">courier.com</a> — Single API for push, in-app, email, chat, SMS, and other messaging channels with template management and other features. Free plan includes 10,000 messages/mo.</li>
<li><a href="https://pusher.com/">pusher.com</a> — Realtime messaging service. Free for up to 100 simultaneous connections and 200,000 messages/day</li>
<li><a href="https://www.scaledrone.com/">scaledrone.com</a> — Realtime messaging service. Free for up to 20 simultaneous connections and 100,000 events/day</li>
<li><a href="https://synadia.com/ngs">synadia.com</a> — <a href="https://nats.io">NATS.io</a> as a service. Global, AWS, GCP, and Azure. Free forever with 4k msg size, 50 active connections and 5GB of data per month.</li>
<li><a href="https://www.cloudkarafka.com/">cloudkarafka.com</a> - Free Shared Kafka cluster, up to 5 topics, 10MB data per topic and 28 days of data retention.</li>
<li><a href="https://www.pubnub.com/">pubnub.com</a> - Swift, Kotlin and React messaging at 1 million transactions each month. Transactions may contain multiple messages.</li>
<li><a href="https://developers.eyeson.team/">eyeson API</a> - A video communication API service based on WebRTC (SFU, MCU) to build video platforms. Allows RealTime Data Injection, Video Layouts, Recordings, a fully featured hosted web UI (quickstart) or packages for custom UIs. Has a <a href="https://apiservice.eyeson.com/api-pricing">free tier for developers</a> with 1000 meeting minutes a month.</li>
<li><a href="https://upstash.com/kafka">Upstash Kafka</a> - Serverless Kafka Cloud offering with per-request-pricing. It has a free tier with max 10000 messages per day.</li>
 </ol>
 
<h2 id="log-management">Log Management</h2>
 <ol>
<li><a href="https://bugfender.com/">bugfender.com</a> — Free up to 100k log lines/day with 24 hours retention</li>
<li><a href="https://www.humio.com/">humio.com</a> — Free up to 2 GB/day with 7 days retention</li>
<li><a href="https://logdna.com">logdna.com</a> - Free for a single user, no retention, unlimited hosts and sources</li>
<li><a href="https://logentries.com/">logentries.com</a> — Free up to 5 GB/month with 7 days retention</li>
<li><a href="https://www.loggly.com/">loggly.com</a> — Free for a single user, see the lite option</li>
<li><a href="https://logz.io/">logz.io</a> — Free up to 3 GB/day, 3 days retention</li>
<li><a href="https://www.manageengine.com/cloud-log-management">ManageEngine Log360 Cloud</a> — Log Management service powered by Manage Engine. Free Plan offers 50 GB storage with 1 Month retention.</li>
<li><a href="https://papertrailapp.com/">papertrailapp.com</a> — 48 hours search, 7 days archive, 100 MB/month</li>
<li><a href="https://sematext.com/logsene">sematext.com</a> — Free up to 500 MB/day, 7 days retention</li>
<li><a href="https://www.sumologic.com/">sumologic.com</a> — Free up to 500 MB/day, 7 days retention</li>
<li><a href="https://logflare.app/">logflare.app</a> — Free for upto 12,960,000 enteries per app per month, 3 days retention</li>
<li><a href="https://logtail.com/">logtail.com</a> — ClickHouse-based SQL-compatible log management. Free up to 1 GB per month, 3 days retention.</li>
 </ol>
 
<h2 id="translation-management">Translation Management</h2>
 <ol>
<li><a href="https://crowdin.com/">crowdin.com</a> — Unlimited projects, unlimited strings and collaborators for Open Source</li>
<li><a href="https://gitlocalize.com">gitlocalize.com</a> - Free and unlimited for both private and public repositories</li>
<li><a href="https://lingohub.com/">lingohub.com</a> — Free up to 3 users, always free for Open Source</li>
<li><a href="https://localazy.com">localazy.com</a> - Free for 1000 source language strings, unlimited languages, unlimited contributors, startup and open source deals</li>
<li><a href="https://localeum.com">Localeum</a> - Free up to 1000 strings, 1 user, unlimited languages, unlimited projects</li>
<li><a href="https://localizely.com/">localizely.com</a> — Free for Open Source</li>
<li><a href="https://localise.biz/">Loco</a> — Free up to 2000 translations, Unlimited translators, 10 languages/project, 1000 translatable assets/project</li>
<li><a href="https://www.oneskyapp.com/">oneskyapp.com</a> — Limited free edition for up to 5 users, free for Open Source</li>
<li><a href="https://poeditor.com/">POEditor</a> — Free up to 1000 strings</li>
<li><a href="https://simplelocalize.io/">SimpleLocalize</a> - Free up to 100 translation keys, unlimited strings, unlimited languages, startup deals</li>
<li><a href="https://texterify.com/">Texterify</a> - Free for a single user</li>
<li><a href="https://www.transifex.com/">transifex.com</a> — Free for Open Source</li>
<li><a href="https://translation.io">Translation.io</a> - Free for Open Source</li>
<li><a href="https://webtranslateit.com/">webtranslateit.com</a> — Free up to 500 strings</li>
<li><a href="https://weblate.org/">weblate.org</a> — It’s free for libre projects up to 10,000 string source for the free tier, and Unlimited Self-hosted on-premises.</li>
<li><a href="https://pofile.net/free-po-editor">Free PO editor</a> — Free for everybody</li>
 </ol>
 
<h2 id="monitoring">Monitoring</h2>
 <ol>
<li><a href="https://pingmeter.com/">Pingmeter.com</a> - 5 uptime monitors with 10 minutes interval. monitor SSH, HTTP, HTTPS, and any custom TCP ports.</li>
<li><a href="https://amixr.io/">amixr.io</a> - Developer-friendly alerting and on-call management with brilliant Slack Integration, API and Terraform. Free phone call, SMS, Telegram, Slack and E-Mail packages.</li>
<li><a href="https://www.appdynamics.com/">appdynamics.com</a> — Free for 24 hours metrics, application performance management agents limited to one Java, one .NET, one PHP and one Node.js</li>
<li><a href="https://www.appneta.com/">appneta.com</a> — Free with 1-hour data retention</li>
<li><a href="https://assertible.com">assertible.com</a> — Automated API testing and monitoring. Free plans for teams and individuals.</li>
<li><a href="https://blackfire.io/">blackfire.io</a> — Blackfire is the SaaS-delivered Application Performance Solution. Free Hacker plan (PHP only)</li>
<li><a href="https://checklyhq.com">checklyhq.com</a> - Open source E2E / Synthetic monitoring and deep API monitoring for developers. Free plan with 5 users and 50k+ check runs.</li>
<li><a href="https://www.circonus.com/">circonus.com</a> — Free for 20 metrics</li>
<li><a href="https://cloudsploit.com">cloudsploit.com</a> — AWS security and configuration monitoring. Free: unlimited on-demand scans, unlimited users, unlimited stored accounts. Subscription: automated scanning, API access, etc.</li>
<li><a href="https://www.datadoghq.com/">datadoghq.com</a> — Free for up to 5 nodes</li>
<li><a href="https://deadmanssnitch.com/">deadmanssnitch.com</a> — Monitoring for cron jobs. 1 free snitch (monitor), more if you refer others to sign up</li>
<li><a href="https://economize.cloud">economize.cloud</a> — Economize helps demystify cloud infrastructure costs by organizing cloud resources, optimize and report the same. Free for up to $5000 spends on Google Cloud Platform every month.</li>
<li><a href="https://www.elastic.co/solutions/apm">elastic.co</a> — Instant performance insights for JS developers. Free with 24 hours data retention</li>
<li><a href="https://freeboard.io/">freeboard.io</a> — Free for public projects. Dashboards for your Internet of Things (IoT) projects</li>
<li><a href="https://www.freshworks.com/website-monitoring/">freshworks.com</a> — Monitor 50 URLs at 1-minute interval with 10 Global locations and 5 Public status pages for Free</li>
<li><a href="https://gitential.com">gitential.com</a> — Software Development Analytics platform. Free: unlimited public repositories, unlimited users, free trial for private repos. On-prem version available for enterprise.</li>
<li><a href="https://grafana.com/products/cloud/">Grafana Cloud</a> - Grafana Cloud is a composable observability platform, integrating metrics and logs with Grafana. Free: 3 users, 10 dashboards, 100 alerts, metrics storage in Prometheus and Graphite (10,000 series, 14 days retention), logs storage in Loki (50 GB of logs, 14 days retention)</li>
<li><a href="https://healthchecks.io">healthchecks.io</a> — Monitor your cron jobs and background tasks. Free for up to 20 checks.</li>
<li><a href="https://www.inspector.dev">inspector.dev</a> - A complete Real-Time monitoring dashboard in less than one minute with free forever tier.</li>
<li><a href="https://instrumentalapp.com">instrumentalapp.com</a> - Beautiful and easy-to-use application and server monitoring with up to 500 metrics and 3 hours of data visibility for free</li>
<li><a href="https://keychest.net/speedtest">keychest.net/speedtest</a> - Independent speed test and TLS handshake latency test against Digital Ocean</li>
<li><a href="https://letsmonitor.org">letsmonitor.org</a> - SSL monitoring, free for up to 5 monitors</li>
<li><a href="https://loader.io/">loader.io</a> — Free load testing tools with limitations</li>
<li><a href="https://meercode.io/">meercode.io</a> — Meercode is the ultimate monitoring dashboard for your CI/CD builds. Free for open-source and 1 private repository.</li>
<li><a href="https://www.netdata.cloud/">netdata.cloud</a> — Netdata is an open source tool designed to collect real-time metrics.Great fast growing product. It can also be found in github!</li>
<li><a href="https://www.newrelic.com">newrelic.com</a> — New Relic observability platform built to help engineers create more perfect software. From monoliths to serverless, you can instrument everything, then analyze, troubleshoot, and optimize your entire software stack. Free tier offers 100GB/month of free data ingest, 1 free full access user, and unlimited free basic users.</li>
<li><a href="https://nixstats.com">nixstats.com</a> - Free for one server. E-Mail Notifications, public status page, 60 second interval and more.</li>
<li><a href="https://onlineornot.com/">OnlineOrNot.com</a> - OnlineOrNot is a reliable uptime monitor for both JS-based web apps and websites. 10 uptime checks (for static websites and APIs) with a 5 minute interval, 1 browser check with a 15 minute interval. Free for up to 3 users, alerts via Slack, Discord, and Email.</li>
<li><a href="https://www.opsgenie.com/">opsgenie.com</a> — Powerful alerting and on-call management for operating always-on services. Free up to 5 users.</li>
<li><a href="https://www.paessler.com/">paessler.com</a> — Powerful infrastructure and network monitoring solution including alerting, strong visualization capabilities and basic reporting. Free up to 100 sensors.</li>
<li><a href="https://syagent.com/">syagent.com</a> — Non commercial free server monitoring service, alerts and metrics.</li>
<li><a href="https://pagertree.com/">pagertree.com</a> - Simple interface for alerting and on-call management. Free up to 5 users.</li>
<li><a href="https://pingbreak.com/">pingbreak.com</a> — Modern uptime monitoring service. Check unlimited URLs and get downtime notifications via Discord, Slack or email.</li>
<li><a href="https://pingpong.one/">pingpong.one</a> — Advanced status page platform with monitoring. Free tier includes one public customizable status page with SSL subdomain. Pro plan is offered to open-source projects and non-profits free of charge.</li>
<li><a href="https://sematext.com/">sematext.com</a> — Free for 24 hours metrics, unlimited number of servers, 10 custom metrics, 500,000 custom metrics data points, unlimited dashboards, users, etc.</li>
<li><a href="https://sitemonki.com/">sitemonki.com</a> — Website, domain, Cron &amp; SSL monitoring, 5 monitors in each category for free</li>
<li><a href="https://www.skylight.io/">skylight.io</a> — Free for first 100,000 requests (Rails only)</li>
<li><a href="https://probeapi.speedchecker.xyz/">speedchecker.xyz</a> — Performance Monitoring API, checks Ping, DNS, etc.</li>
<li><a href="https://www.stathat.com/">stathat.com</a> — Get started with 10 stats for free, no expiration</li>
<li><a href="https://www.statuscake.com/">statuscake.com</a> — Website monitoring, unlimited tests free with limitations</li>
<li><a href="https://statusgator.com/">statusgator.com</a> — Status page monitoring, 3 monitors free</li>
<li><a href="https://www.thousandeyes.com/">thousandeyes.com</a> — Network and user experience monitoring. 3 locations and 20 data feeds of major web services free</li>
<li><a href="https://www.thundra.io/apm">thundra.io/apm</a> — Application monitoring and debugging. Has a free tier up to 250k monthly invocations.</li>
<li><a href="https://uptimerobot.com/">uptimerobot.com</a> — Website monitoring, 50 monitors free</li>
<li><a href="https://uptimetoolbox.com/">uptimetoolbox.com</a> — Free monitoring for 5 websites, 60 second intervals, public statuspage.</li>
<li><a href="https://www.zenduty.com/">zenduty.com</a> — End-to-end incident management, alerting, on-call management and response orchestration platform for network operations, site reliability engineering and DevOps teams. Free for upto 5 users.</li>
<li><a href="https://asayer.io/pricing.html">asayer.io</a> — Hosted version of openreplay, an open-source session replay (alternative to FullStory and LogRocket). Free 1k sessions/month with 14 days retention</li>
<li><a href="https://lean20.com/product/status/">lean20.com</a> - Public status pages for incident reporting. 100% free.</li>
<li><a href="https://instatus.com">instatus.com</a> - Get a beautiful status page in 10 seconds. Free forever with unlimited subs and unlimited teams.</li>
<li><a href="https://squadcast.com">Squadcast.com</a> - Squadcast is an end-to-end incident management software that’s designed to help you promote SRE best practices. Free forever plan available for upto 10 users.</li>
 </ol>
 
<h2 id="crash-and-exception-handling">Crash and Exception Handling</h2>
 <ol>
<li><a href="https://catchjs.com/">CatchJS.com</a> - JavaScript error tracking with screenshots and click trails. Free for open source projects.</li>
<li><a href="https://www.bugsnag.com/">bugsnag.com</a> — Free for up to 2,000 errors/month after the initial trial</li>
<li><a href="https://exceptionless.com">exceptionless</a> — Real-time error, feature, log reporting and more. Free for 3k events per month/1 user. Open source and easy to self-host for unlimited use.</li>
<li><a href="https://glitchtip.com/">GlitchTip</a> — Simple, open source error tracking. Compatible with open-source Sentry SDKs. 1000 events per month for free, or can self-host with no limits</li>
<li><a href="https://www.honeybadger.io">honeybadger.io</a> - Exception, uptime, and cron monitoring. Free for small teams and open-source projects (12,000 errors/month).</li>
<li><a href="https://rollbar.com/">rollbar.com</a> — Exception and error monitoring, free plan with 5,000 errors/month, unlimited users, 30 days retention</li>
<li><a href="https://sentry.io/">sentry.io</a> — Sentry tracks app exceptions in real-time, has a small free plan. Free for 5k errors per month/ 1 user, unrestricted use if self-hosted</li>
 </ol>
 
<h2 id="search">Search</h2>
 <ol>
<li><a href="https://www.algolia.com/">algolia.com</a> — Hosted search-as-you-type (instant). Free hacker plan up to 10,000 documents and 100,000 operations. Bigger free plans available for community/Open Source projects</li>
<li><a href="https://bonsai.io/">bonsai.io</a> — Free 1 GB memory and 1 GB storage</li>
<li><a href="http://www.searchly.com/">searchly.com</a> — Free 2 indices and 20 MB storage</li>
<li><a href="https://pagedart.com/">pagedart.com</a> - AI search as a service the free tier includes 1000 Documents, 50000 searches. Larger free tiers are possible for worthwhile projects.</li>
 </ol>
 
<h2 id="email">Email</h2>
 <ol>
<li><a href="https://www.gmailnator.com/">gmailnator</a> - Free, temporary gmail for testing.</li>
<li><a href="https://10minutemail.com">10minutemail</a> - Free, temporary email for testing.</li>
<li><a href="https://anonaddy.com">AnonAddy</a> - Open-source anonymous email forwarding, create unlimited email aliases for free</li>
<li><a href="https://www.antideo.com">Antideo</a> — 10 API requests per hour for email verification, IP and phone number validation in free tier. No Credit Cards required.</li>
<li><a href="https://biz.mail.ru/">biz.mail.ru</a> — 5,000 mailboxes with 25 GB each per custom domain with DNS hosting</li>
<li><a href="https://bump.email/">Bump</a> - Free 10 Bump email addresses, 1 custom domain</li>
<li><a href="https://burnermail.io/">Burnermail</a> – Free 5 Burner Email Addresses, 1 Mailbox, 7 day Mailbox History</li>
<li><a href="https://buttondown.email/">Buttondown</a> — Newsletter service. Up to 1,000 subscribers free</li>
<li><a href="https://www.cloudmailin.com/">CloudMailin</a> - Incoming email via HTTP POST and transactional outbound - 10,000 free emails/month</li>
<li><a href="https://www.cloudmersive.com/email-verification-api">cloudmersive.com</a> — Email validation and verification API for developers, 2,000 free API requests/month</li>
<li><a href="https://contact.do/">Contact.do</a> — Contact form in a link (bitly for contact forms) - totally free!</li>
<li><a href="https://debugmail.io/">debugmail.io</a> — Easy to use testing mail server for developers</li>
<li><a href="https://emailtemporanee.com/">Email Temporanee</a> - Easy to use free Unlimited disposable temporary email addresses (temp email). Autoexpires even you can set it day.</li>
<li><a href="https://elasticemail.com">elasticemail.com</a> — 100 free emails/day. 1,000 emails for $0.09 through API (pay as you go).</li>
<li><a href="https://emailoctopus.com">EmailOctopus</a> - Up to 2,500 subscribers and 10,000 emails per month free</li>
<li><a href="https://eva.pingutil.com">Eva</a> — Verify 5 million emails per day for free using REST API. No sign-ups required.</li>
<li><a href="https://fakermail.com/">fakermail.com</a> — Free, temporary email for testing with last 100 email accounts stored.</li>
<li><a href="https://forwardemail.net">forwardemail.net</a> — Free email forwarding for custom domains. Create and forward an unlimited amount of email addresses with your domain name (<strong>note</strong>: You must pay if you use .casa, .cf, .click, .email, .fit, .ga, .gdn, .gq, .loan, .london, .men, .ml, .pl, .rest, .ru, .tk, .top, .work TLDs due to spam)</li>
<li><a href="https://improvmx.com">ImprovMX</a> – Free email forwarding</li>
<li><a href="https://inboxkitten.com/">inboxkitten.com</a> - Free temporary/disposable email inbox, with up-to 3 day email auto-deletes. Open sourced, and can be self-hosted.</li>
<li><a href="http://inumbo.com/">inumbo.com</a> — SMTP based spam filter, free for 10 users</li>
<li><a href="https://kickbox.io/">kickbox.io</a> — Verify 100 emails free, real-time API available</li>
<li><a href="https://mail.gw">mail.gw</a> — 10 Minute Mail. Free anonymous temporary email without obligations.</li>
<li><a href="https://mail.tm">mail.tm</a> — Disposable e-mail with user friendly interface. No registration needed.</li>
<li><a href="https://mailazy.com/">mailazy.com</a> — Mailazy is the only simple transactional email service you’ll need. 15,000 emails/month free forever (500 emails/day sending limit).</li>
<li><a href="https://www.mail-tester.com">mail-tester.com</a> — Test if email’s dns/spf/dkim/dmarc settings are correct, 20 free/month</li>
<li><a href="https://dkimvalidator.com/">dkimvalidator.com</a> - Test if email’s dns/spf/dkim/dmarc settings are correct, free service by roundsphere.com</li>
<li><a href="https://mailboxlayer.com/">mailboxlayer.com</a> — Email validation and verification JSON API for developers. 1,000 free API requests/month</li>
<li><a href="https://mailcatcher.me/">mailcatcher.me</a> — Catches mail and serves it through a web interface</li>
<li><a href="https://mailchimp.com/">mailchimp.com</a> — 2,000 subscribers and 12,000 emails/month free</li>
<li><a href="https://www.mailerlite.com">MailerLite.com</a> — 1,000 subscribers/month, 12,000 emails/month free</li>
<li><a href="https://www.mailinator.com/">mailinator.com</a> — Free, public, email system where you can use any inbox you want</li>
<li><a href="https://www.mailjet.com/">mailjet.com</a> — 6,000 emails/month free (200 emails daily sending limit)</li>
<li><a href="https://www.mailkitchen.com/">mailkitchen</a> — Free for life without commitment, 10,000 emails/month, 1,000 emails/day</li>
<li><a href="http://mailmenot.io">mailmenot.io</a> — Free disposable temporary email service with ability to add multiple email addresses</li>
<li><a href="https://mailnesia.com">Mailnesia</a> - Free temporary/disposable email, which auto visit registration link.</li>
<li><a href="https://mailsac.com">mailsac.com</a> - Free API for temporary email testing, free public email hosting, outbound capture, email-to-slack/websocket/webhook (1,500 monthly API limit)</li>
<li><a href="https://mailtie.com/">Mailtie.com</a> - Free Email Forwarding for Your Domain. No registration required. Free Forever.</li>
<li><a href="https://mailtrap.io/">mailtrap.io</a> — Fake SMTP server for development, free plan with 1 inbox, 50 messages, no team member, 2 emails/second, no forward rules</li>
<li><a href="https://mailvalidator.io/">mailvalidator.io</a> - Verify 300 emails/month for free, real-time API with bulk processing available</li>
<li><a href="https://www.mail7.io/">mail7.io</a> — Free Temp Email Addresses for QA Developers. Create email addresses instantly using Web Interface or API</li>
<li><a href="https://www.mohmal.com/en">mohmal.com</a> — Disposable temporary email</li>
<li><a href="https://moosend.com/">moosend.com</a> — Mailing list management service. Free account for 6 months for startups</li>
<li><a href="https://outlook.live.com/owa/">Outlook.com</a> - Free personal email and calendar</li>
<li><a href="https://parsio.io">Parsio.io</a> — Free email parser (Forward email, extract the data, send it to your server)</li>
<li><a href="https://pepipost.com">pepipost.com</a> — 30k emails free for first month, then first 100 emails/day free</li>
<li><a href="https://phplist.com/">phplist.com</a> — Hosted version allow 300 emails/month free</li>
<li><a href="https://postmarkapp.com/">postmarkapp.com</a> - 100 emails/month free, unlimited DMARC weekly digests</li>
<li><a href="https://quickemailverification.com">QuickEmailVerification</a> — Verify 100 emails daily for free on a free tier along with other free APIs like DEA Detector, DNS Lookup, SPF Detector and more.</li>
<li><a href="https://www.sender.net">Sender</a> Up to 15 000 emails/month - Up to 2 500 subscribers</li>
<li><a href="https://sendgrid.com/">sendgrid.com</a> — 100 emails/day and 2,000 contacts free</li>
<li><a href="https://www.sendinblue.com/">sendinblue.com</a> — 9,000 emails/month free</li>
<li><a href="https://sendpulse.com">sendpulse.com</a> — 50 emails free/hour, first 12,000 emails/month free</li>
<li><a href="https://www.socketlabs.com">socketlabs.com</a> - 40k emails free for first month, then first 2000 emails/month free</li>
<li><a href="https://www.sparkpost.com/">sparkpost.com</a> — First 500 emails/month free</li>
<li><a href="https://substack.com">Substack</a> — Unlimited free newsletter service. Start paying when you charge for it.</li>
<li><a href="https://tempmailo.com/">Tempmailo</a> - Unlimited free temp email addresses. Autoexpire in two days.</li>
<li><a href="https://hottempmail.com/">HotTempMail</a> - Unlimited free temp email or disposable temporary email addresses. Autoexpires in one day.</li>
<li><a href="https://temp-mail.io">temp-mail.io</a> — Free disposable temporary email service with multiple emails at once and forwarding</li>
<li><a href="https://temp-mail.org">temp-mail.org</a> — Temporary, secure, anonymous, free, disposable email address with REST API for fetching 100 emails from its disposable mailbox per day for free.</li>
<li><a href="https://testmail.app/">testmail.app</a> - Automate end-to-end email tests with unlimited mailboxes and a GraphQL API. 100 emails/month free forever, unlimited free for open source.</li>
<li><a href="https://tinyletter.com/">tinyletter.com</a> — 5,000 subscribers/month free</li>
<li><a href="https://www.trashmail.com">trashmail.com</a> - Free disposable email addresses with forwarding and automatic address expiration</li>
<li><a href="https://www.validator.pizza/">Validator.Pizza</a> — Free API to detect disposable emails</li>
<li><a href="https://verifalia.com/email-verification-api">Verifalia</a> — Real-time email verification API with mailbox confirmation and disposable email address detector; 25 free email verifications/day.</li>
<li><a href="https://verimail.io/">verimail.io</a> — Bulk and API email verification service. 100 free verifications/month</li>
<li><a href="https://connect.yandex.com/pdd/">Yandex.Connect</a> — Free email and DNS hosting for up to 1,000 users</li>
<li><a href="http://www.yopmail.fr/en/">yopmail.fr</a> — Disposable email addresses</li>
<li><a href="https://www.zoho.com">Zoho</a> — Started as an e-mail provider but now provides a suite of services out of which some of them have free plans. List of services having free plans :
 <ol>
<li><a href="https://zoho.com/mail">Email</a> Free for 5 users. 5GB/user &amp; 25 MB attachment limit, 1 domain.</li>
<li><a href="https://zoho.com/sprints">Sprints</a> Free for 5 users,5 Projects &amp; 500MB storage.</li>
<li><a href="https://zoho.com/docs">Docs</a> — Free for 5 users with 1 GB upload limit &amp; 5GB storage. Zoho Office Suite (Writer,Sheets &amp; Show) comes bundled with it.</li>
<li><a href="https://zoho.com/projects">Projects</a> — Free for 3 users, 2 projects &amp; 10 MB attachment limit. Same plan applies to <a href="https://zoho.com/bugtracker">Bugtracker</a>.</li>
<li><a href="https://zoho.com/connect">Connect</a> — Team Collaboration free for 25 users with 3 groups, 3 custom apps, 3 Boards, 3 Manuals, 10 Integrations along with channels,events &amp; forums.</li>
<li><a href="https://zoho.com/meeting">Meeting</a> — Meetings with upto 3 meeting participants &amp; 10 Webinar attendees.</li>
<li><a href="https://zoho.com/vault">Vault</a> — Password Management free for Individuals.</li>
<li><a href="https://zoho.com/showtime">Showtime</a> — Yet another Meeting software for training for a remote session upto 5 attendees.</li>
<li><a href="https://zoho.com/notebook">Notebook</a> — A free alternative to Evernote.</li>
<li><a href="https://zoho.com/wiki">Wiki</a> — Free for 3 users with 50 MB storage, unlimited pages, zip backups, RSS &amp; Atom feed, access controls &amp; customisable CSS.</li>
<li><a href="https://zoho.com/subscriptions">Subscriptions</a> — Recurring Billing management free for 20 customers/subscriptions &amp; 1 user with all the payment hosting done by Zoho themselves. Last 40 subscription metrics are stored</li>
<li><a href="https://zoho.com/checkout">Checkout</a> — Product Billing management with 3 pages &amp; up to 50 payments.</li>
<li><a href="https://zoho.com/desk">Desk</a> — Customer Support management with 3 agents and private knowledge base, email tickets. Integrates with <a href="https://zoho.com/assist">Assist</a> for 1 remote technician &amp; 5 unattended computers.</li>
<li><a href="https://zoho.com/cliq">Cliq</a> — Team chat software with 100 GB storage, unlimited users, 100 users per channel &amp; SSO.</li>
<li><a href="https://zoho.com/campaigns">Campaigns</a></li>
<li><a href="https://zoho.com/forms">Forms</a></li>
<li><a href="https:/zoho.com/sign">Sign</a></li>
<li><a href="https://zoho.com/surveys">Surveys</a></li>
<li><a href="https://zoho.com/bookings">Bookings</a></li>
<li><a href="https://zoho.com/analytics">Analytics</a></li>
 </ol></li>
<li><a href="https://simplelogin.io/">SimpleLogin</a> – Open source, self-hostable email alias/forwarding solution. Free 5 Aliases, unlimited bandwith, unlimited reply/send. Free for educational staffs (student, researcher, etc).</li>
<li><a href="https://www.emailjs.com/">EmailJS</a> – This is not a full email server, this is just email client which you can use to send emails right from client send without exposing your credentials, the free tier has: 200 monthly requests, 2 email templates, Requests up to 50Kb, Limited contacts history.</li>
 </ol>
 
<h2 id="font">Font</h2>
 <ol>
<li><a href="https://www.dafont.com/">dafont</a> - The fonts presented on this website are their authors’ property, and are either freeware, shareware, demo versions or public domain.</li>
<li><a href="https://everythingfonts.com/">Everything Fonts</a> - Offers multiple tools; <span class="citation" data-cites="font-face">@font-face</span>, Units Converter, Font Hinter and Font Submitter.</li>
<li><a href="https://www.fontsquirrel.com/">Font Squirrel</a> - Freeware fonts that is licensed for commercial work. Hand-selected these typefaces and presenting them in an easy-to-use format.</li>
<li><a href="https://fonts.google.com/">Google Fonts</a> - Lots of free fonts that are easy and quick to install in a website via a download or a link to Google’s CDN.</li>
<li><a href="https://www.fontget.com/">FontGet</a> - Has a variety of fonts available to download and sorted neatly with tags.</li>
<li><a href="https://www.fontshare.com/">Fontshare</a> - is a free fonts service. It’s a growing collection of professional grade fonts that are 100% free for personal and commercial use.</li>
 </ol>
 
<h2 id="forms">Forms</h2>
 <ol>
<li><a href="https://www.99inbound.com/">99inbound.com</a> - Build forms and share them online. Get an email or Slack message for each submission. Free plan has 2 forms, 100 entries per month, basic email &amp; Slack.</li>
<li><a href="https://form.taxi/">Form.taxi</a> — Endpoint for HTML forms submissions. With notifications, spam blocker and GDPR-compliant data processing. Free plan for basic usage.</li>
<li><a href="https://formcake.com">Formcake.com</a> - Form backend for devs, free plan allows unlimited forms, 100 submissions, Zapier integration. No libraries or dependencies required.</li>
<li><a href="https://formcarry.com">Formcarry.com</a> - HTTP POST Form endpoint, Free plan allows 100 submissions per month.</li>
<li><a href="https://www.formingo.co/">formingo.co</a>- Easy HTML forms for static websites, get started for free without registering an account. Free plan allows 500 submissions per month, customizable reply-to email address.</li>
<li><a href="https://formlets.com/">formlets.com</a> — Online forms, unlimited single page forms/month, 100 submissions/month, email notifications.</li>
<li><a href="https://www.formrocket.me">formrocket.me</a> - HTML forms made easy, unlimited forms &amp; responses. Comes with Discord notifications and more.</li>
<li><a href="https://formspark.io/">formspark.io</a> - Form to Email service, free plan allows unlimited forms, 250 submissions per month, support by Customer assistance team.</li>
<li><a href="https://formspree.io/">Formspree.io</a> — Send email using an HTTP POST request. Free tier limits to 50 submissions per form per month.</li>
<li><a href="https://formsubmit.co/">Formsubmit.co</a> — Easy form endpoints for your HTML forms. Free Forever. No registration required.</li>
<li><a href="https://getform.io/">getform.io</a> - Form backend platform for designers and developers, 1 form, 50 submissions, Single file upload, 100MB file storage.</li>
<li><a href="https://herotofu.com/">HeroTofu.com</a> - Forms backend with bot detection and encrypted archive. Forward submissions via UI to email, Slack, or Zapier. Use your own frontend, no server code required. Free plan gives unlimited forms and 100 submissions per month.</li>
<li><a href="https://heyform.net/">HeyForm.net</a> - Drag and drop online form builder. Free tier lets you create unlimited forms and collect unlimited submissions. Comes with pre-built templates, anti-spam, and 100MB file storage.</li>
<li><a href="https://hyperforms.app/">Hyperforms.app</a> — Create form to email and more in seconds and without backend code. The Personal account gives you up to 50 form submissions per month for free.</li>
<li><a href="https://kwes.io/">Kwes.io</a> - Feature rich form endpoint. Works great with static sites. Free plan includes up 1 website with up to 50 submissions per month.</li>
<li><a href="https://pageclip.co/">Pageclip</a> - Free plan allows one site, one form, 1,000 submissions per month.</li>
<li><a href="https://qualtrics.com/free-account">Qualtrics Survey</a> — Create professional forms &amp; survey using this first class tool. 50+ expert-designed survey templates. Free Account has limit of 1 active survey, 100 responses/survey &amp; 8 response types.</li>
<li><a href="https://smartforms.dev/">smartforms.dev</a> - Powerful and easy form backend for your website, forever free plan allows 50 submissions per month, 250MB file storage, Zapier integration, CSV/JSON export, custom redirect, custom response page, Telegram &amp; Slack bot, single email notifications.</li>
<li><a href="https://www.staticforms.xyz/">staticforms.xyz</a> - Integrate HTML forms easily without any server side code for free. After user submits the form an email will be sent to your registered address with form content.</li>
<li><a href="https://stepform.io">stepFORM.io</a> - Quiz and Form Builder. Free plan has 5 forms, up to 3 steps per form, 50 responses per month.</li>
<li><a href="https://www.typeform.com/">Typeform.com</a> — Include beautifully designed forms on websites. Free plan allows only 10 fields per form and 100 responses per month.</li>
<li><a href="https://waiverstevie.com">WaiverStevie.com</a> - Electronic Signature platform with a REST API. Receive notifications with webhooks. Free plan watermarks signed documents, but allows unlimited envelopes + signatures.</li>
<li><a href="https://web3forms.com">Web3Forms</a> - Contact forms for Static &amp; JAMStack Websites without writing backend code. Free plan allows Unlimited Forms, Unlimited Domains &amp; 250 Submissions per month.</li>
<li><a href="https://webask.io">WebAsk</a> - Survey and Form Builder. Free plan has 3 surveys per account, 100 responses per month, 10 elements per survey.</li>
<li><a href="https://www.wufoo.com/">Wufoo</a> - Quick forms to use on websites. Free plan has a limit of 100 submissions each month.</li>
<li><a href="https://formpost.app">formpost.app</a> - Free, unlimited Form to Email service. Setup custom redirect, auto response, webhooks etc for free.</li>
 </ol>
 
<h2 id="cdn-and-protection">CDN and Protection</h2>
 <ol>
<li><a href="https://arvancloud.com/">Arvan Cloud</a> — Offers cloud related services (CDN,Cloud DNS, PaaS, Security etc.). Free plan offers :
 <ol>
<li>CDN with Free SSL. 100 GB Traffic + 1 Million HTTP(S) Requests.</li>
<li>Free Cloud DNS for unlimited domains.</li>
<li>Free Cloud Security with Basic DDoS Protection + 5 Firewall Rules.</li>
<li>Free VoD (Video On Demand) Platform with 10 GB Storage + 50 GB Traffic.</li>
 </ol></li>
<li><a href="https://www.bootstrapcdn.com/">bootstrapcdn.com</a> — CDN for bootstrap, bootswatch and fontawesome.io</li>
<li><a href="https://cdnjs.com/">cdnjs.com</a> — Simple. Fast. Reliable. Content delivery at its finest. cdnjs is a free and open-source CDN service trusted by over 11% of all websites, powered by Cloudflare.</li>
<li><a href="https://www.cloudflare.com/">Cloudflare</a>
 <ol>
<li>CDN along with free SSL</li>
<li>Free DNS for unlimited number of domains</li>
<li>Firewall rules and pagerules</li>
<li>Analytics</li>
<li><a href="https://pages.cloudflare.com/">Cloudflare Pages</a> — Free web hosting (JAMstack platform) for frontend developers to collaborate and deploy websites. 1 build at a time, 500 builds/month, unlimited sites, unlimited requests, unlimited bandwidth.</li>
<li><a href="https://workers.cloudflare.com/">Cloudflare Workers</a> — Deploy serverless code for free on Cloudflare’s global network. 100,000 free requests per day with a workers.dev subdomain.</li>
<li><a href="https://developers.cloudflare.com/cloudflare-one/connections/connect-apps/run-tunnel/trycloudflare">Quick Tunnels</a> — Create a tunnel from your server to a publically accessible, randomly-generated trycloudflare.com domain. No account required.</li>
 </ol></li>
<li><a href="https://combinatronics.com/">Combinatronics</a> - Convert your Github hosted assets (images, CSS, JS, etc.) into CDN assets. Can even render HTML files, for <a href="https://combinatronics.com/ripienaar/free-for-dev/master/index.html">example from this repo</a>. Similar to rawgit.com and raw.githack.com.</li>
<li><a href="https://ddos-guard.net/store/web">ddos-guard.net</a> — Free CDN, DDoS protection and SSL certificate</li>
<li><a href="https://developers.google.com/speed/libraries/">developers.google.com</a> — The Google Hosted Libraries is a content distribution network for the most popular, Open Source JavaScript libraries</li>
<li><a href="https://graphcdn.io/">GraphCDN</a> - Scale, inspect &amp; protect your GraphQL API. 5m requests per month for free.</li>
<li><a href="http://www.jare.io">jare.io</a> — CDN for images. Uses AWS CloudFront</li>
<li><a href="https://www.jsdelivr.com/">jsdelivr.com</a> — A free, fast, and reliable CDN for open source. Supports npm, GitHub, WordPress, Deno, and more.</li>
<li><a href="https://docs.microsoft.com/en-us/aspnet/ajax/cdn/overview">Microsoft Ajax</a> — The Microsoft Ajax CDN hosts popular third-party JavaScript libraries such as jQuery and enables you to easily add them to your Web application</li>
<li><a href="https://www.ovh.ie/ssl-gateway/">ovh.ie</a> — Free DDoS protection and SSL certificate</li>
<li><a href="https://pagecdn.com/">PageCDN.com</a> - Offers free Public CDN for everyone, and free Private CDN for opensource / nonprofits.</li>
<li><a href="https://www.skypack.dev/">Skypack</a> — The 100% Native ES Module JavaScript CDN. Free for 1 million requests per domain, per month.</li>
<li><a href="https://raw.githack.com/">raw.githack.com</a> — A modern replacement of <strong>rawgit.com</strong> which simply hosts file using Cloudflare</li>
<li><a href="https://www.section.io/">section.io</a> — A simple way to spin up and manage a complete Varnish Cache solution. Supposedly free forever for one site</li>
<li><a href="https://speeder.io/">speeder.io</a> — Uses KeyCDN. Automatic image optimization and free CDN boost. Free and does not require any server changes</li>
<li><a href="https://statically.io/">statically.io</a> — CDN for Git repos (GitHub, GitLab, Bitbucket), WordPress-related assets and images</li>
<li><a href="https://toranproxy.com/">toranproxy.com</a> — Proxy for Packagist and GitHub. Never fail CD. Free for personal use, 1 developer, no support</li>
<li><a href="https://unpkg.com/">UNPKG</a> — CDN for everything on npm</li>
<li><a href="https://www.namecheap.com/supersonic-cdn/#free-plan">Namecheap Supersonic</a> — Free DDoS protection</li>
 </ol>
 
<h2 id="paas">PaaS</h2>
 <ol>
<li><a href="https://anvil.works">anvil.works</a> - Web app development with nothing but Python. Free tier with unlimited apps.</li>
<li><a href="https://appharbor.com/">appharbor.com</a> — A .Net PaaS that provides 1 free worker</li>
<li><a href="https://www.configure.it/">configure.it</a> — Mobile app development platform, free for 2 projects, limited features but no resource limits</li>
<li><a href="https://www.codenameone.com/">codenameone.com</a> — Open source, cross platform, mobile app development toolchain for Java/Kotlin developers. Free for commercial use with unlimited number of projects</li>
<li><a href="https://www.deta.sh">Deta</a> – Deploy unlimited number of Node.js and Python apps for free. Includes free DBs, Auth and email.</li>
<li><a href="https://encore.dev/">encore.dev</a> — Backend framework using static analysis to provide automatic infrastructure, boilerplate free code, and more. Includes free cloud hosting for hobby projects.</li>
<li><a href="https://gigalixir.com/">gigalixir.com</a> - Gigalixir provide 1 free instance that never sleeps, and free-tier PostgreSQL database limited to 2 connections, 10, 000 rows and no backups, for Elixir/Phoenix apps.</li>
<li><a href="https://glitch.com/">Glitch</a> — Free public hosting with features such as code sharing and real-time collaboration. Free plan has 1000 hours/month limit.</li>
<li><a href="https://www.heroku.com/">Heroku</a> — Host your apps in the cloud, free for single process apps</li>
<li><a href="https://usekrucible.com">Krucible</a> — Krucible is a platform for creating Kubernetes clusters for testing and development. Free tier accounts come with 25 cluster-hours per month.</li>
<li><a href="https://www.mendix.com/">Mendix</a> — Rapid Application Development for Enterprises, unlimited number of free sandbox environments supporting unlimited users, 0.5 GB storage and 1 GB RAM per app. Also Studio and Studio Pro IDEs are allowed in free tier.</li>
<li><a href="https://m3o.com">m3o.com</a> - A cloud platform for API services development. M3O is a fully managed Micro as a Service offering focusing on Go microservices development in the Cloud. Free tier provides enough to run 5 services and collaborate with others.</li>
<li><a href="https://okteto.com">Okteto Cloud</a> - Managed Kubernetes service designed for remote development. Free developer accounts come with 5 Kubernetes namespaces, 3Gi/pod with a maximum of 8Gi/namespace, 1CPU/pod with a maximum of 4CPUs/namespace and 5GB Disk space. The apps sleep after 24 hours of inactivity.</li>
<li><a href="https://openode.io">opeNode</a> — Free Node.js hosting for Open Source projects. 100 GB Bandwidth/month with 100 MB memory &amp; 1000 MB storage. Deploy using CLI or existing Git repository.</li>
<li><a href="https://www.outsystems.com/">outsystems.com</a> — Enterprise web development PaaS for on-premise or cloud, free “personal environment” offering allows for unlimited code and up to 1 GB database</li>
<li><a href="https://pipedream.com">pipedream.com</a> - An integration platform built for developers. Develop any workflow, based on any trigger. Workflows are code, which you can run <a href="https://docs.pipedream.com/pricing/">for free</a>. No server or cloud resources to manage.</li>
<li><a href="https://www.pythonanywhere.com/">pythonanywhere.com</a> — Cloud Python app hosting. Beginner account is free, 1 Python web application at your-username.pythonanywhere.com domain, 512 MB private file storage, one MySQL database</li>
<li><a href="https://archive.sap.com/documents/docs/DOC-56411/">sap.com</a> — The in-memory Platform-as-a-Service offering from SAP. Free developer accounts come with 1 GB structured, 1 GB unstructured, 1 GB of Git data and allow you to run HTML5, Java and HANA XS apps</li>
<li><a href="https://www.serverless.com/cloud">Serverless Cloud</a> - Serverless Cloud lets you build Serverless APIs, DBs and Storage by using infrastrucure <em>from</em> code approach(no yaml, no infrastructure configuration). The product is provided by Serverless Inc. and currently under public preview.</li>
<li><a href="https://fly.io/">fly.io</a> - Fly is a platform for applications that need to run globally. It runs your code close to users and scales compute in cities where your app is busiest. Write your code, package it into a Docker image, deploy it to Fly’s platform and let that do all the work to keep your app snappy. Free for side projects, $10/mo of service credit that automatically applies to any paid service. And if you ran really small virtual machines, credits will go a long way.</li>
<li><a href="https://www.divio.com/">Divio</a> - A platform to manage cloud application deploying only using Docker. Available free subscription for development projects, Requires card and no custom domain support.<br />
</li>
<li><a href="https://www.koyeb.com">Koyeb</a> - Koyeb is a developer-friendly serverless platform to deploy apps globally. Seamlessly run Docker containers, web apps, and APIs with git-based deployment, native autoscaling, a global edge network, and built-in service mesh and discovery. Koyeb provides two nano services to run your apps with its forever-free tier and also sponsors open-source projects with free resources.</li>
<li><a href="https://railway.app">Railway</a> - Railway is an infrastructure platform where you can provision infrastructure, develop with that infrastructure locally, and then deploy to the cloud. 1GB Disk, 512 MB RAM, limited to $5 of usage monthly available for free.</li>
<li><a href="https://www.napkin.io/">Napkin</a> - FaaS with 1Gb of memory, a default timeout of 15 seconds and 1,000,000 free API calls/month.</li>
<li><a href="https://www.meteor.com/cloud">Meteor Cloud</a> — Galaxy hosting. Meteor’s own platform-as-a-service for Meteor apps which includes a free MongoDB Shared Hosting and automatic SSL.</li>
<li><a href="https://northflank.com">Northflank</a> — Build and deploy microservices, jobs and managed databases with a powerful UI, API &amp; CLI. Seamlessly scale containers from version control and external Docker registries. Free tier includes 2 services, 2 cron jobs and 1 database.</li>
 </ol>
 
<h2 id="baas">BaaS</h2>
 <ol>
<li><a href="https://www.ably.com">ably.com</a> - APIs for realtime messaging, push notifications, and event-driven API creation. Free plan has 3m messages/mo, 100 concurrent connections, 100 concurrent channels.</li>
<li><a href="https://www.back4app.com">back4app.com</a> - Back4App is an easy-to-use, flexible and scalable backend based on Parse Platform.</li>
<li><a href="https://backendless.com/">backendless.com</a> — Mobile and Web Baas, with 1 GB file storage free, push notifications 50000/month, and 1000 data objects in table.</li>
<li><a href="https://developers.bmc.com/site/global/bmc_helix_platform/program/overview/index.gsp">BMC Developer Program</a> — The BMC Developer Program provides documentation and resources to build and deploy digital innovations for your enterprise. Access to a comprehensive, personal sandbox which includes the platform, SDK, and a library of components that can be used to build and tailor apps.</li>
<li><a href="https://darklang.com/">darklang.com</a> - Hosted language combined with editor and infrastructure. Free during the beta, generous free tier planned after beta.</li>
<li><a href="https://firebase.com">Firebase</a> — Firebase helps you build and run successful apps. Free Spark Plan offers Authentication, Hosting, Firebase ML , Realtime Database,Cloud Storage,Testlab. A/B Testing, Analytics, App Distribution, App Indexing, Cloud Messaging (FCM), Crashlytics, Dynamic Links, In-App Messaging, Performance Monitoring, Predictions, and Remote Config are always-free.</li>
<li><a href="https://flutterflow.io">Flutter Flow</a> — Build your Flutter App UI without writing a single line of code. Also has a Firebase integration. Free plan includes full access to UI Builder and Free templates.</li>
<li><a href="https://getstream.io/">getstream.io</a> — Build scalable newsfeeds, activity streams, chat and messaging in a few hours instead of weeks</li>
<li><a href="https://hasura.io/">hasura.io</a> — Hasura extends your existing databases wherever it is hosted and provides an instant GraphQL API that can be securely accessed for web, mobile, and data integration workloads. Free for 1GB/month of data pass-through.</li>
<li><a href="https://www.iron.io/">iron.io</a> — Async task processing (like AWS Lambda) with free tier and 1-month free trial</li>
<li><a href="https://netlicensing.io">netlicensing.io</a> - A cost-effective and integrated Licensing-as-a-Service (LaaS) solution for your software on any platform from Desktop to IoT and SaaS. Basic Plan for <em>FREE</em> while you are a student.</li>
<li><a href="https://nhost.io">nhost.io</a> - Serverless backend for web and mobile apps. Free plan includes: PostgreSQL, GraphQL (Hasura), Authentication, Storage, and Serverless Functions.</li>
<li><a href="https://onesignal.com/">onesignal.com</a> — Unlimited free push notifications</li>
<li><a href="https://paraio.com">paraio.com</a> — Backend service API with flexible authentication, full-text search and caching. Free for 1 app, 1GB app data.</li>
<li><a href="https://posthook.io/">posthook.io</a> — Job Scheduling Service. Allows you to schedule requests for specific times. 500 scheduled requests/month free.</li>
<li><a href="https://www.progress.com/kinvey">progress.com</a> — Mobile backend, starter plan has unlimited requests/second, with 1 GB of data storage. Enterprise application support</li>
<li><a href="https://www.pubnub.com/">pubnub.com</a> — Free push notifications for up to 1 million messages/month and 100 active daily devices</li>
<li><a href="https://pushbots.com/">pushbots.com</a> — Push notification service. Free for up to 1.5 million pushes/month</li>
<li><a href="https://pushcrew.com/">pushcrew.com</a> — Push notification service. Unlimited notifications up to 2000 Subscribers</li>
<li><a href="https://pusher.com/beams">pusher.com</a> — Free, unlimited push notifications for 2000 monthly active users. A single API for iOS and Android devices.</li>
<li><a href="https://www.pushtechnology.com/">pushtechnology.com</a> — Real-time Messaging for browsers, smartphones and everyone. 100 concurrent connections. Free 10 GB data/month</li>
<li><a href="https://quickblox.com/">quickblox.com</a> — A communication backend for instant messaging, video and voice calling and push notifications</li>
<li><a href="https://restspace.io/">restspace.io</a> - Configure a server with services for auth, data, files, email API, templates etc, then compose into pipelines and transform data.</li>
<li><a href="https://developer.salesforce.com/signup">Salesforce Developer Program</a> — Build apps Lightning fast with drag and drop tools. Customize your data model with clicks. Go further with Apex code. Integrate with anything using powerful APIs. Stay protected with enterprise-grade security. Customize UI with clicks or any leading-edge web framework. Free Developer Program gives access to the full Lightining Platform.</li>
<li><a href="https://developer.servicenow.com/">ServiceNow Developer Program</a> — Rapidly build, test, and deploy applications that make work better for your organization. Free Instance &amp; access early previews.</li>
<li><a href="https://simperium.com/">simperium.com</a> — Move data everywhere instantly and automatically, multi-platform, unlimited sending and storage of structured data, max. 2,500 users/month</li>
<li><a href="https://stackstorm.com/">stackstorm.com</a> — Event-driven automation for apps, services and workflows, free without flow, access control, LDAP,…</li>
<li><a href="https://streamdata.io/">streamdata.io</a> — Turns any REST API into an event-driven streaming API. Free plan up to 1 million messages and 10 concurrent connections.</li>
<li><a href="https://supabase.io">Supabase</a> — The Open Source Firebase Alternative to build backends. Free Plan offers Authentication, Realtime Database &amp; Object Storage.</li>
<li><a href="https://tyk.io/">tyk.io</a> — API management with authentication, quotas, monitoring and analytics. Free cloud offering</li>
<li><a href="https://zapier.com/">zapier.com</a> — Connect the apps you use, to automate tasks. 5 zaps, every 15 minutes and 100 tasks/month</li>
<li><a href="https://leancloud.app/">LeanCloud</a> — Mobile backend. 1GB of data storage, 256MB instance, 3K API requests/day, 10K pushes/day are free. (API is very similar to Parse Platform)</li>
<li><a href="https://liteflow.com/">Liteflow</a> - Low-code development toolkit built to help you focus on your app’s real value.</li>
<li><a href="https://budibase.com/">BudiBase</a> - Budibase is an open-source low-code platform for creating internal apps in minutes. Supports PostgreSQL, MySQL, MSSQL, MongoDB, Rest API, Docker, K8s</li>
 </ol>
 
<h2 id="web-hosting">Web Hosting</h2>
 <ol>
<li><a href="https://www.alwaysdata.com/">Alwaysdata</a> — 100 MB free web hosting with support for MySQL, PostgreSQL, CouchDB, MongoDB, PHP, Python, Ruby, Node.js, Elixir, Java, Deno, custom web servers, access via FTP, WebDAV and SSH; mailbox, mailing list and app installer included.</li>
<li><a href="https://www.awardspace.com">Awardspace.com</a> — Free web hosting + a free short domain, PHP, MySQL, App Installer, Email Sending &amp; No Ads.</li>
<li><a href="https://bubble.io/">Bubble</a> — Visual programming to build web and mobile apps without code, free with Bubble branding.</li>
<li><a href="https://cloudno.de/">cloudno.de</a> — Free cloud hosting for Node.js apps.</li>
<li><a href="https://deploynow.space">Deploy Now</a> — Deploy smarter. Deploy faster. Deploy Now. - Deploy up to 3 web projects from your GitHub repository for free.</li>
<li><a href="https://drv.tw">Drive To Web</a> — Host directly to the web from Google Drive &amp; OneDrive. Static sites only. Free forever. One site per Google/Microsoft account.</li>
<li><a href="https://preview.fenixwebserver.com">Fenix Web Server</a> - A developer desktop app for hosting sites locally and sharing them publically (in realtime). Work however you like, using its beautiful user interface, API, and/or CLI.</li>
<li><a href="http://freehostingnoads.net/">Free Hosting</a> — Free Hosting With PHP 5, Perl, CGI, MySQL, FTP, File Manager, POP E-Mail, free sub-domains, free domain hosting, DNS Zone Editor, Web Site Statistics, FREE Online Support and many more features not offered by other free hosts.</li>
<li><a href="https://www.freehostia.com">Freehostia</a> — FreeHostia offers free hosting services incl. an industry-best Control Panel &amp; a 1-click installation of 50+ free apps. Instant setup. No forced ads.</li>
<li><a href="https://hostman.com">hostman.com</a> — Deploy up to 3 static sites from your GitHub repository for free.</li>
<li><a href="https://neocities.org">Neocities</a> — Static, 1 GB free storage with 200 GB Bandwidth.</li>
<li><a href="https://www.netlify.com/">Netlify</a> — Builds, deploy and hosts static site/app free for, 100 GB data and 100 GB/month bandwidth.</li>
<li><a href="https://layer0.co/">Layer0</a> Deploy fast dynamic Jamstack websites on a global CDN powered by <a href="https://www.limelight.com/">Limelight</a> for free with 100GB/month bandwidth and 3 environments.</li>
<li><a href="https://pantheon.io/">pantheon.io</a> — Drupal and WordPress hosting, automated DevOps and scalable infrastructure. Free for developers and agencies</li>
<li><a href="https://readthedocs.org/">readthedocs.org</a> — Free documentation hosting with versioning, PDF generation and more</li>
<li><a href="https://render.com">render.com</a> — Unified cloud to build and run apps and sites with free SSL, a global CDN, private networks, auto-deploys from Git, and completely free plans for web services, databases, and static web pages.</li>
<li><a href="https://sourceforge.net/">SourceForge</a> — Find, Create and Publish Open Source software for free</li>
<li><a href="https://stormkit.io/">Stormkit</a> — Integrate building, deploying and hosting seamlessly with your git flow of your JAMStack or Node.JS app. 50 GB bandwith and 10m requests for free per month including free SSL.</li>
<li><a href="https://surge.sh/">surge.sh</a> — Static web publishing for Front-End developers. Unlimited sites with custom domain support</li>
<li><a href="https://tilda.cc/">tilda.cc</a> — One site, 50 pages, 50 MB storage, only the main pre-defined blocks among 170+ available, no fonts, no favicon and no custom domain</li>
<li><a href="https://txti.es/">txti.es</a> — Quickly create web pages with markdown.</li>
<li><a href="https://vercel.com/">Vercel</a> — Build, deploy, and host web apps with free SSL, global CDN, and unique Preview URLs each time you <code>git push</code>. Perfect for Next.js and other Static Site Generators.</li>
<li><a href="https://versoly.com/">Versoly</a> — SaaS focussed website builder - unlimited websites, 70+ blocks, 5 templates, custom CSS, favicon, SEO and forms. No custom domain.</li>
<li><a href="https://www.qovery.com">Qovery</a> — Qovery is the simplest way to deploy your full-stack apps on AWS, GCP and Azure. It is free web hosting for developers with Database, SSL, a global CDN, and auto deploys from Git.</li>
<li><a href="https://qoddi.com">Qoddi</a> - PaaS service similar to Heroku with a developer-centric approach and all inclusive features. Free tier for static assets, staging and developer apps.</li>
<li><a href="https://freeflarum.com/">FreeFlarum</a> - Community powered free Flarum hosting for up to 250 users (donate to remove watermark from footer).</li>
 </ol>
 
<h2 id="dns">DNS</h2>
 <ol>
<li><a href="https://developers.cloudflare.com/1.1.1.1/">1.1.1.1</a> - Free public DNS Resolver which is fast and secure (encrypt your DNS query), provided by CloudFlare. Useful to bypass your internet provider’s DNS blocking, prevent DNS query spying, and <a href="https://developers.cloudflare.com/1.1.1.1/1.1.1.1-for-families">to block adult &amp; malware content</a>. Can also be used <a href="https://developers.cloudflare.com/1.1.1.1/encrypted-dns/dns-over-https/make-api-requests">via API</a>. Note: Just a DNS resolver, not a DNS hoster.</li>
<li><a href="https://www.1984.is/product/freedns/">1984.is</a> — Free DNS service with API, and lots of other free DNS features included.</li>
<li><a href="https://biz.mail.ru">biz.mail.ru</a> — Free email and DNS hosting for up to 5,000 users</li>
<li><a href="https://www.cloudns.net/">cloudns.net</a> — Free DNS hosting up to 1 domain with 50 records</li>
<li><a href="https://dns.he.net/">dns.he.net</a> — Free DNS hosting service with Dynamic DNS Support</li>
<li><a href="https://www.dnspod.com/">dnspod.com</a> — Free DNS hosting.</li>
<li><a href="https://www.duckdns.org/">duckdns.org</a> — Free DDNS with up to 5 domains on the free tier. With configuration guides for various setups.</li>
<li><a href="https://www.dynu.com/">dynu.com</a> — Free dynamic DNS service</li>
<li><a href="https://freedns.afraid.org/">freedns.afraid.org</a> — Free DNS hosting. Also provide free subdomain based on numerous public user <a href="https://freedns.afraid.org/domain/registry/">contributed domains</a>. Get free subdomains from “Subdomains” menu after signing up.</li>
<li><a href="https://www.luadns.com/">luadns.com</a> — Free DNS hosting, 3 domains, all features with reasonable limits</li>
<li><a href="https://www.namecheap.com/domains/freedns/">namecheap.com</a> — Free DNS. No limit on number of domains</li>
<li><a href="https://nextdns.io">nextdns.io</a> - DNS based firewall, 300K free queries monthly</li>
<li><a href="https://www.noip.com/">noip</a> — a dynamic dns service that allows up to 3 hostnames free with confirmation every 30 days</li>
<li><a href="https://ns1.com/">ns1.com</a> — Data Driven DNS, automatic traffic management, 500k free queries</li>
<li><a href="https://www.nsupdate.info/">nsupdate.info</a> — Free and open-source Dynamic DNS service</li>
<li><a href="https://pointhq.com/developer">pointhq.com</a> — Free DNS hosting on Heroku.</li>
<li><a href="https://www.qingcloud.com/products/dns/">qingcloud</a> — Free DNS hosting by QingCloud.</li>
<li><a href="https://selectel.com/services/dns/">selectel.com</a> — Free DNS hosting with unlimited records, anycast</li>
<li><a href="https://web.gratisdns.dk/domaener/dns/">web.gratisdns.dk</a> — Free DNS hosting.</li>
<li><a href="https://connect.yandex.com/pdd/">Yandex.Connect</a> — Free email and DNS hosting for up to 1,000 users</li>
<li><a href="https://zilore.com/en/dns">zilore.com</a> — Free DNS hosting.</li>
<li><a href="https://www.zoneedit.com/free-dns/">zoneedit.com</a> — Free DNS hosting with Dynamic DNS Support.</li>
<li><a href="https://zonewatcher.com">zonewatcher.com</a> — Automatic backups and DNS change monitoring. 1 domain free</li>
<li><a href="https://www.huaweicloud.com/intl/en-us/product/dns.html">huaweicloud.com</a> – Free DNS hosting by Huawei</li>
<li><a href="https://www.hetzner.com/dns-console">Hetzner</a> – Free DNS hosting from Hetzner with API support.</li>
<li><a href="https://docs.glauca.digital/hexdns/">Glauca</a> – Free DNS hosting for up to 3 domains and DNSSEC support</li>
 </ol>
 
<h2 id="iaas">IaaS</h2>
 <ol>
<li><a href="https://www.backblaze.com/b2/">backblaze.com</a> — Backblaze B2 cloud storage. Free 10 GB (Amazon S3-like) object storage for unlimited time</li>
<li><a href="https://filebase.com/">filebase.com</a> - S3 Compatible Object Storage Powered by Blockchain. 5 GB free storage for unlimited duration.</li>
<li><a href="https://fosshost.org/">fosshost.org</a> - Free open source hosting VPS, web, storage and mirror hosting.</li>
<li><a href="https://www.scaleway.com/en/object-storage/">scaleway</a> — S3-Compatible Object Storage. Free 75 GB storage and external outgoing traffic.</li>
<li><a href="https://storj.io/">Storj</a> — Decentralised Private Cloud Storage for Apps and Developers. Free plan provides 3 Projects, 50 GB storage per project/month , 50 GB bandwidth per project/month.</li>
 </ol>
 
<h2 id="dbaas">DBaaS</h2>
 <ol>
<li><a href="https://airtable.com/">airtable.com</a> — Looks like a spreadsheet, but it’s a relational database, unlimited bases, 1,200 rows/base and 1,000 API requests/month</li>
<li><a href="https://www.datastax.com/products/datastax-astra/">Astra</a> — Cloud Native Cassandra as a Service with <a href="https://www.datastax.com/products/datastax-astra/pricing">80GB free tier</a></li>
<li><a href="https://bit.io">bit.io</a> — PostgreSQL managed database service. Unlimited repos, 10GB storage, 10M queried rows/month.</li>
<li><a href="https://www.cloudamqp.com/">cloudamqp.com</a> — RabbitMQ as a Service, up to 1M messages/month and 20 connections free</li>
<li><a href="https://www.elephantsql.com/">elephantsql.com</a> — PostgreSQL as a service, 20 MB free</li>
<li><a href="https://fauna.com/">FaunaDB</a> — Serverless cloud database, with native GraphQL, multi-model access and daily free tiers up to 100 MB</li>
<li><a href="https://harperdb.io/">HarperDb</a> — Serverless cloud database, with dynamic schema based on JSON, 3000 IOPS with 1GB storage</li>
<li><a href="https://www.heroku.com/">heroku.com</a> — PostgreSQL as a service, up to 10,000 rows and 20 connections free (provided as an “addon,” but can be attached to an otherwise empty app and accessed externally)</li>
<li><a href="https://upstash.com/">Upstash</a> — Serverless Redis with free tier up to 10,000 requests per day, 256MB max database size, and 20 concurrent connections</li>
<li><a href="https://www.mongodb.com/cloud/atlas">MongoDB Atlas</a> — free tier gives 512 MB</li>
<li><a href="https://www.redsmin.com/">redsmin.com</a> — Online real-time monitoring and administration service for Redis, Monitoring for 1 Redis instance free</li>
<li><a href="https://redislabs.com/try-free/">redislabs</a> - Free 30Mb redis instance</li>
<li><a href="https://www.memcachier.com/">MemCachier</a> — Managed Memcache service. Free for up to 25MB, 1 Proxy Server and basic analytics</li>
<li><a href="https://scalingo.com/">scalingo.com</a> — Primarily a PaaS but offers a 128MB to 192MB free tier of MySQL, PostgreSQL or MongoDB</li>
<li><a href="https://seatable.io/">SeaTable</a> — Flexible, Spreadsheet-like Database built by Seafile team. unlimited tables, 2,000 lines, 1-month versioning, up to 25 team members.</li>
<li><a href="https://skyvia.com/">skyvia.com</a> — Cloud Data Platform, offers free tier and all plans are completely free while in beta</li>
<li><a href="https://stackby.com/">StackBy</a> — One tool that brings together flexibility of spreadsheets, power of databases and built-in integrations with your favorite business apps. Free plan includes unlimited users, 10 stacks, 2GB attachment per stack.</li>
<li><a href="https://www.influxdata.com/">InfluxDB</a> — Timeseries database, free up to 3MB/5 minutes writes, 30MB/5 minutes reads and 10,000 cardinalities series</li>
<li><a href="https://www.quickmetrics.io/">Quickmetrics</a> — Timeseries database with dashboard included, free up to 10,000 events/day and total of 5 metrics.</li>
<li><a href="https://restdb.io/">restdb.io</a> - a fast and simple NoSQL cloud database service. With restdb.io you get schema, relations, automatic REST API (with MongoDB-like queries) and an efficient multi-user admin UI for working with data. Free plan allows 3 users, 2500 records and 1 API requests per second.</li>
<li><a href="https://www.cockroachlabs.com/free-tier/">cockroachlabs.com</a> — Free CockroachDB up to 5GB and 1vCPU (limited <a href="https://www.cockroachlabs.com/docs/cockroachcloud/serverless-faqs.html#what-are-the-usage-limits-of-cockroachdb-serverless-beta">request units</a>)</li>
<li><a href="https://neo4j.com/cloud/aura/">Neo4j Aura</a> — Managed native Graph DBMS / analytics platform with a Cypher query language and a REST API. Limits on graph size (50k nodes, 175k relationships).</li>
<li><a href="https://cloud.dgraph.io/pricing?type=free">Dgraph Cloud</a> — Managed native Graph DBMS with a GraphQL API. Limited to 1 MB data transfer per day.</li>
<li><a href="https://www.tigergraph.com/cloud/">TigerGraph Cloud</a> — Managed native Graph DBMS / analytics platform with a SQL-like graph query language and a REST API. 1 TG.Free instance on AWS (4 vCPU, 7.5 GB memory, 50 GB disk) or on GCP(2 vCPU, 8 GB memory, 128 GB disk). Free instance sleeps after 1 hour of inactivity.</li>
<li><a href="https://terminusdb.com/">TerminusX</a> — Managed free service for TerminusDB, a document and graph database written in Prolog and Rust. Free for dev, paid service for enterprise deployments and support.</li>
<li><a href="https://www.macrometa.com/">Macrometa</a> - a noSQL database, Pub/Sub, event processing, and serverless edge computing platform for building geo-distributed and real-time applications. Free dev account gives access to 10,000 Operations/Day &amp; 200MB Storage.</li>
<li><a href="https://planetscale.com/">Planetscale</a> - PlanetScale is a MySQL compatible, serverless database platform powered by Vitess, 3 databases for free with 10GB storage, 100 Million rows read/mo per database, and 10 Million rows written/mo per database.</li>
<li><a href="http://cloud.yugabyte.com">YugabyteDB</a> - YugabyteDB is a distributed SQL database compatible with PostgresSQL. The cloud free tier is a 2 vCPU, 4GB RAM, 10GB Disk.</li>
 </ol>
 
<h2 id="tunneling-webrtc-web-socket-servers-and-other-routers">Tunneling, WebRTC, Web Socket Servers and Other Routers</h2>
 <ol>
<li><a href="https://conveyor.cloud/">conveyor.cloud</a> — Visual Studio extension to expose IIS Express to the local network or over a tunnel to a public URL.</li>
<li><a href="https://www.vpn.net/">Hamachi</a> — LogMeIn Hamachi is a hosted VPN service that lets you securely extend LAN-like networks to distributed teams with free plan allows unlimited networks with up to 5 peoples</li>
<li><a href="https://localhost.run/">localhost.run</a> — Expose locally running servers over a tunnel to a public URL.</li>
<li><a href="https://theboroer.github.io/localtunnel-www/">localtunnel</a> — Expose locally running servers over a tunnel to a public URL. Free hosted version, and <a href="https://github.com/localtunnel/localtunnel">open source</a>.</li>
<li><a href="https://ngrok.com/">ngrok.com</a> — Expose locally running servers over a tunnel to a public URL.</li>
<li><a href="https://www.radmin-vpn.com/">Radmin VPN</a> — Connect multiple computers together via a VPN enabling LAN-like networks. Unlimited peers. (Hamachi alternative)</li>
<li><a href="https://segment.com/">segment.com</a> — Hub to translate and route events to other third-party services. 100,000 events/month free</li>
<li><a href="https://en.wikipedia.org/wiki/STUN">STUN</a> — Session Traversal of User Datagram Protocol [UDP] Through Network Address Translators [NATs])
 <ol>
<li>Google STUN — <a href="stun:stun.l.google.com:19302">stun:stun.l.google.com:19302</a></li>
<li>Twilio STUN — <a href="stun:global.stun.twilio.com:3478?transport=udp">stun:global.stun.twilio.com:3478?transport=udp</a></li>
 </ol></li>
<li><a href="https://tailscale.com/">Tailscale</a> — Zero config VPN, using the open source WireGuard protocol. Installs on MacOS, iOS, Windows, Linux, and Android devices. Free plan for personal use with 20 devices.</li>
<li><a href="https://webhookrelay.com">webhookrelay.com</a> — Manage, debug, fan-out and proxy all your webhooks to public or internal (ie: localhost) destinations. Also, expose servers running in a private network over a tunnel by getting a public HTTP endpoint (<code>https://yoursubdomain.webrelay.io &lt;----&gt; http://localhost:8080</code>).</li>
<li><a href="https://www.xirsys.com">Xirsys</a> — Global network of STUN / TURN servers with a generous free tier.</li>
<li><a href="https://www.zerotier.com">ZeroTier</a> — FOSS managed virtual Ethernet as a service. Unlimited end-to-end encrypted networks of 100 clients on free plan. Clients for desktop/mobile/NA; web interface for configuration of custom routing rules and approval of new client nodes on private networks.</li>
 </ol>
 
<h2 id="issue-tracking-and-project-management">Issue Tracking and Project Management</h2>
 <ol>
<li><a href="https://www.acunote.com/">acunote.com</a> — Free project management and SCRUM software for up to 5 team members</li>
<li><a href="https://asana.com/">asana.com</a> — Free for private project with collaborators</li>
<li><a href="https://backlog.com">Backlog</a> — Everything your team needs to release great projects in one platform. Free plan offers 1 Project with 10 users &amp; 100MB storage.</li>
<li><a href="https://basecamp.com/personal">Basecamp</a> - To-do lists, milestone management, forum-like messaging, file sharing, and time tracking. Up to 3 projects, 20 users, and 1GB of storage space.</li>
<li><a href="https://www.bitrix24.com/">bitrix24.com</a> — Free intranet and project management tool</li>
<li><a href="https://cacoo.com/">cacoo.com</a> — Online diagrams in real-time: flowchart, UML, network. Free max. 15 users/diagram, 25 sheets</li>
<li><a href="https://chpokify.com/">Chpokify</a> — Teams based Planning Poker that saves time of sprint estimation. Free up to 5 users, free Jira integrations, unlimited video calls, unlimited teams, unlimited sessions.</li>
<li><a href="https://clickup.com/">clickup.com</a> — Project management. Free, premium version with cloud storage. Mobile applications and Git integrations available</li>
<li><a href="https://cloudcraft.co/">Cloudcraft</a> — Design a professional architecture diagram in minutes with the Cloudcraft visual designer, optimized for AWS with smart components that show live data too.</li>
<li><a href="https://codegiant.io">Codegiant</a> — Project Management with Repository hosting &amp; CI/CD. Free Plan Offers Unlimited Repositories,Projects &amp; Documents with 5 Team Members. 500 CI/CD minutes per month. 30000 Serverless Code Run minutes per month.1GB repository storage.</li>
<li><a href="https://www.atlassian.com/software/confluence">Confluence</a> - Atlassian’s content collaboration tool used to help teams collaborate and share knowledge efficiently. Free plan up to 10 users.</li>
<li><a href="https://www.contriber.com/">contriber.com</a> — Customizable project management platform, free starter plan, 5 workspaces</li>
<li><a href="https://www.draw.io/">draw.io</a> — Online diagrams stored locally, in Google Drive, OneDrive or Dropbox. Free for all features and storage levels</li>
<li><a href="https://freedcamp.com/">freedcamp.com</a> - tasks, discussions, milestones, time tracking, calendar, files and password manager. Free plan with unlimited projects, users and files storage.</li>
<li><a href="https://www.easyretro.io/">easyretro.io</a> — Free simple and intuitive sprint retrospective tool</li>
<li><a href="https://gforge.com">GForge</a> — Project Management &amp; Issue Tracking toolset for complex projects with self-premises and SaaS options. SaaS free plan offers first 5 users free &amp; free for Open Source Projects.</li>
<li><a href="https://www.gleek.io">gleek.io</a> — Free description-to-diagrams tool for developers. Create informal, UML class, object, or entity-relationship diagrams using your keyword.</li>
<li><a href="https://www.gliffy.com/">gliffy.com</a> — Online diagrams: flowchart, UML, wireframe,… Also plugins for Jira and Confluence. 5 diagrams and 2 MB free</li>
<li><a href="https://github.com/marketplace/graphql-inspector">GraphQL Inspector</a> - GraphQL Inspector ouputs a list of changes between two GraphQL schemas. Every change is precisely explained and marked as breaking, non-breaking or dangerous.</li>
<li><a href="https://huboard.com/">huboard.com</a> — Instant project management for your GitHub issues, free for Open Source</li>
<li><a href="https://hygger.io">Hygger</a> — Project management platform. Free plan offers unlimited users,projects &amp; boards with 100 MB Storage.</li>
<li><a href="https://instabug.com">Instabug</a> — A comprehensive bug reporting and in-app feedback SDK for mobile apps. Free plan up to 1 app and 1 member.</li>
<li><a href="https://www.ilograph.com/">Ilograph</a> — interactive diagrams that allow users to see their infrastructure from multiple perspectives and levels of detail. Diagrams can be expressed in code. Free tier has unlimited private diagrams with up to 3 viewers.</li>
<li><a href="https://issueembed.dev/">Issue Embed</a> - A bug reporting tool for websites to go directly into your Github Issues. Free plan for personal repositories with up to 500 issues/month and 10,000 page views/month.</li>
<li><a href="https://www.atlassian.com/software/jira">Jira</a> — Advanced software development project management tool used in many corporate environments. Free plan up to 10 users.</li>
<li><a href="https://kanbanflow.com/">kanbanflow.com</a> — Board-based project management. Free, premium version with more options</li>
<li><a href="https://kanbantool.com/">kanbantool.com</a> — Kanban board-based project management. Free, paid plans with more options</li>
<li><a href="https://kitemaker.co">Kitemaker.co</a> - Collaborate through all phases of the product development process and keep track of work across Slack, Discord, Figma, and Github. Unlimited users, unlimited spaces. Free plan up to 250 work items.</li>
<li><a href="https://kumu.io/">Kumu.io</a> — Relationship maps with animation, decorations, filters, clustering, spreadsheet imports and more. Free tier allows unlimited public projects. Graph size unlimited. Free private projects for students. Sandbox mode is available if you prefer to not leave your file publicly online (upload, edit, download, discard).</li>
<li><a href="https://www.leanboard.io">LeanBoard</a> — Collaborative whiteboard with sticky notes for your GitHub issues (Useful for Example Mapping and other techniques)</li>
<li><a href="https://linear.app/">Linear</a> — Issue tracker with streamlined interface. Free for unlimited members, up to 10MB file upload size, 250 issues (excluding Archive)</li>
<li><a href="https://www.meistertask.com/">MeisterTask</a> — Online task management for teams. Free up to 3 projects, unlimited project members.</li>
<li><a href="https://www.meuscrum.com/en">MeuScrum</a> - Free online scrum tool with kanban board</li>
<li><a href="https://www.ntaskmanager.com/">nTask</a> — Project management software that enables your teams tn collaborate, plan, analyze and manage everyday tasks. Basic Plan free forever with 100 MB storage, 5 users/team. Unlimited workspaces, meetings,tasks, timesheets and issue tracking.</li>
<li><a href="https://ora.pm/">Ora</a> - Agile task management &amp; team collaboration. Free for up to 3 users and files are limited to 10 MB.</li>
<li><a href="https://www.pivotaltracker.com/">pivotaltracker.com</a> — Free for unlimited public projects and two private projects with 3 total active users (read-write) and unlimited passive users (read-only).</li>
<li><a href="https://plan.io/">plan.io</a> — Project Management with Repository Hosting and more options. Free for 2 users with 10 customers and 500MB Storage</li>
<li><a href="https://www.planitpoker.com/">planitpoker.com</a> — Free online planning poker (estimation tool)</li>
<li><a href="https://saas.zentao.pm/">saas.zentao.pm</a> - An Application Lifecycle Management solution for Issue Tracking and Project Management, on-premise and open source version are available as well.</li>
<li><a href="https://www.scrumfast.com">ScrumFast</a> - Scrum board with a very intuitive interface, free up to 5 users.</li>
<li><a href="https://shortcut.com/">Shortcut</a> - Project management platform. Free for up to 10 users forever.</li>
<li><a href="https://speedboard.app">SpeedBoard</a> - Board for Agile and Scrum retrospectives - Free.</li>
<li><a href="https://www.shakebugs.com/">Shake</a> - In-app bug reporting and feedback tool for mobile apps. Free plan, 10 bug reports per app/per month.</li>
<li><a href="https://tadum.app">Tadum</a> - Meeting agenda and minutes app designed for recurring meetings, free for teams up to 10</li>
<li><a href="https://taiga.io/">taiga.io</a> — Project management platform for startups and agile developers, free for Open Source</li>
<li><a href="https://tara.ai/">Tara AI</a> — Simple sprint management service. Free plan has unlimited tasks, sprints and workspaces, with no user limits.</li>
<li><a href="https://www.targetprocess.com/">targetprocess.com</a> — Visual project management, from Kanban and Scrum to almost any operational process. Free for unlimited users, up to 1,000 data entities {<a href="https://www.targetprocess.com/pricing/">more details</a>}</li>
<li><a href="https://www.taskade.com/">taskade.com</a> — Real-time collaborative task lists and outlines for teams</li>
<li><a href="https://taskulu.com/">taskulu.com</a> — Role based project management. Free up to 5 users. Integration with GitHub/Trello/Dropbox/Google Drive</li>
<li><a href="https://teamwork.com/">teamwork.com</a> — Project management &amp; Team Chat. Free for 5 users and 2 projects. Premium plans available.</li>
<li><a href="https://testlio.com/">testlio.com</a> — Issue tracking, test management and beta testing platform. Free for private use</li>
<li><a href="https://terrastruct.com/">terrastruct.com</a> — Online diagram maker specifically for software architecture. Free tier up to 4 layers per diagram.</li>
<li><a href="https://todoist.com/">todoist.com</a> — Collaborative and individual task management. Free, Premium and Team plans are available. Discounts provided for eligible users.</li>
<li><a href="https://trello.com/">trello.com</a> — Board-based project management. Unlimited Personal Boards, 10 Team Boards.</li>
<li><a href="https://tweek.so/">Tweek</a> — Simple Weekly To-Do Calendar &amp; Task Management.</li>
<li><a href="https://ubertesters.com/">ubertesters.com</a> — Test platform, integration and crowdtesters, 2 projects, 5 members</li>
<li><a href="https://vabotu.com/">vabotu</a> - A collaborative tool for project management. Free and other plans are available. The Freelance plan is for 10 users, include messaging, task-boards, 5GB online storage, workspaces, export data.</li>
<li><a href="https://www.vivifyscrum.com/">vivifyscrum.com</a> — Free tool for Agile project management. Scrum Compatible</li>
<li><a href="https://wikifactory.com/">Wikifactory</a> — Product designing Service with Projects, VCS &amp; Issues. Free plan offers unlimited projects &amp; collaborators and 3GB storage.</li>
<li><a href="https://www.yodiz.com/">Yodiz</a> — Agile development and issue tracking. Free up to 3 users, unlimited projects.</li>
<li><a href="https://www.jetbrains.com/youtrack/buy/#edition=incloud">YouTrack</a> — Free hosted YouTrack (InCloud) for FOSS projects, private projects (free for 3 users). Includes time tracking and agile boards</li>
<li><a href="https://www.zenhub.com">zenhub.com</a> — The only project management solution inside GitHub. Free for public repos, OSS and nonprofit organizations</li>
<li><a href="https://zepel.io/">zepel.io</a> - The project management tool that lets you plan features, collaborate across disciplines, and build software together. Free up to 5 members. No feature restrictions.</li>
<li><a href="https://zenkit.com">zenkit.com</a> — Project management and collaboration tool. Free for up to 5 members, 5 GB attachments.</li>
<li><a href="https://zube.io">Zube</a> — Project management with free plan for 4 Projects &amp; 4 users. GitHub integration available.</li>
<li><a href="https://toggl.com/">Toggl</a> — Provides 2 free productivity tools. <a href="https://toggl.com/track/">Toggl Track</a> for time management and tracking app with a free plan provides seamless time tracking and reporting designed for freelancers in mind. It has unlimited tracking records, projects, clients, tags, reporting and more. And <a href="https://toggl.com/plan/">Toggl Plan</a> for task planning that comes with a free plan for solo developers with unlimited tasks, milestones and timelines.</li>
 </ol>
 
<h2 id="storage-and-media-processing">Storage and Media Processing</h2>
 <ol>
<li><a href="https://www.borgbase.com/">borgbase.com</a> — Simple and secure offsite backup hosting for Borg Backup. 10 GB free backup space and 2 repositories.</li>
<li><a href="https://www.icedrive.net/">icedrive.net</a> - Simple cloud storage service. 10 GB free storage</li>
<li><a href="https://www.sync.com/">sync.com</a> - End-to-End cloud storage service. 5 GB free storage</li>
<li><a href="https://www.pcloud.com/">pcloud.com</a> - Cloud storage service. Up to 10 GB free storage</li>
<li><a href="https://sirv.com/">sirv.com</a> — Smart Image CDN with on-the-fly image optimization and resizing. Free tier includes 500 MB of storage and 2 GB bandwidth.</li>
<li><a href="https://image4.io/">image4.io</a> — Image upload, powerful manipulations, storage and delivery for websites and apps, with SDK’s, integrations and migration tools. Free tier includes 25 credits. 1 credit is equal to 1 GB of CDN usage, 1GB of storage or 1000 image transformations.</li>
<li><a href="https://cloudimage.com/">cloudimage.com</a> — Full image optimization and CDN service with 1500+ Points of Presence around the world. A variety of image resizing, compression, watermarking functions. Open source plugins for responsive images, 360 image making and image editing. Free monthly plan with 25GB of CDN traffic and 25GB of cache storage and unlimited transformations.</li>
<li><a href="https://cloudinary.com/">cloudinary.com</a> — Image upload, powerful manipulations, storage and delivery for sites and apps, with libraries for Ruby, Python, Java, PHP, Objective-C and more. Free tier includes 25 monthly credits. 1 credit is equal to 1,000 image transformations, 1 GB of storage, or 1 GB of CDN usage.</li>
<li><a href="https://easydb.io/">easyDB.io</a> — one-click, hosted database provider. They provide a database for the programming language of your choice for development purposes. The DB is ephemeral and will be deleted after 24 or 72 hours on the free tier.</li>
<li><a href="https://embed.ly/">embed.ly</a> — Provides APIs for embedding media in a webpage, responsive image scaling, extracting elements from a webpage. Free for up to 5,000 URLs/month at 15 requests/second</li>
<li><a href="https://www.filestack.com/">filestack.com</a> — File picker, transform and deliver, free for 250 files, 500 transformations and 3 GB bandwidth</li>
<li><a href="https://www.gumlet.com/">gumlet.com</a> — Image resize-as-a-service. It also optimizes images and performs delivery via CDN. Free tier includes 1 GB bandwidth and unlimited number of image processing every month for 1 year.</li>
<li><a href="https://www.image-charts.com/">image-charts.com</a> — Unlimited image chart generation with a watermark</li>
<li><a href="https://www.jitbit.com/imgen/">imgen</a> - Free unlimited social cover image generation API, no watermark</li>
<li><a href="https://jsonbin.io/">jsonbin.io</a> — Free JSON data storage service, ideal for small-scale web apps, website, mobile apps.</li>
<li><a href="https://kraken.io/">kraken.io</a> — Image optimization for website performance as a service, free plan up to 1 MB file size</li>
<li><a href="https://www.npoint.io/">npoint.io</a> — JSON store with collaborative schema editing</li>
<li><a href="https://www.otixo.com/">otixo.com</a> — Encrypt, share, copy and move all your cloud storage files from one place. Basic plan provides unlimited files transfer with 250 MB max. file size and allows 5 encrypted files</li>
<li><a href="https://packagecloud.io/">packagecloud.io</a> — Hosted Package Repositories for YUM, APT, RubyGem and PyPI. Limited free plans, open source plans available via request</li>
<li><a href="https://piio.co/">piio.co</a> — Responsive image optimization and delivery for every website. Free plan for developers and personal websites. Includes free CDN, WebP and Lazy Loading out of the box.</li>
<li><a href="https://pinata.cloud">Pinata IPFS</a> — Pinata is the simplest way to upload and manage files on IPFS. Our friendly user interface combined with our IPFS API makes Pinata the easiest IPFS pinning service for platforms, creators, and collectors. 1 GB storage free along with access to API.</li>
<li><a href="https://placeholder.com/">placeholder.com</a> — A quick and simple image placeholder service</li>
<li><a href="https://placekitten.com/">placekitten.com</a> — A quick and simple service for getting pictures of kittens for use as placeholders</li>
<li><a href="https://plot.ly/">plot.ly</a> — Graph and share your data. Free tier includes unlimited public files and 10 private files</li>
<li><a href="https://podio.com/">podio.com</a> — You can use Podio with a team of up to five people and try out the features of the Basic Plan, except user management</li>
<li><a href="https://quickchart.io">QuickChart</a> — Generate embeddable image charts, graphs, and QR codes</li>
<li><a href="https://redbooth.com">redbooth.com</a> — P2P file syncing, free for up to 2 users</li>
<li><a href="https://siasky.net">Skynet</a> — An open protocol for hosting data and web applications on the decentralized web using <a href="https://sia.tech/">Sia</a>. Free tier provides storage upto 100GB.</li>
<li><a href="https://tinypng.com/">tinypng.com</a> — API to compress and resize PNG and JPEG images, offers 500 compressions for free each month</li>
<li><a href="https://transloadit.com/">transloadit.com</a> — Handles file uploads and encoding of video, audio, images, documents. Free for Open source, charities, and students via the GitHub Student Developer Pack. Commercial applications get 2 GB free for test driving</li>
<li><a href="https://www.twicpics.com">twicpics.com</a> - Responsive images as a service. It provides an image CDN, a media processing API and frontend library to automate image optimization. The service is free up to 3GB trafic/month.</li>
<li><a href="https://uploadcare.com/hub/developers/">uploadcare.com</a> — Uploadcare provides media pipeline with ultimate toolkit based on cutting-edge algorithms. All features are available for developers absolutely for free: File Uploading API and UI, Image CDN and Origin Services, Adaptive Delivery and Smart Compression. Limit free tier has 3000 uploads, 3 GB traffic and 3 GB storage.</li>
<li><a href="https://imagekit.io">imagekit.io</a> – Image CDN with automatic optimization, real-time transformation, and storage that you can integrate with existing setup in minutes. Free plan includes up to 20GB bandwidth per month.</li>
<li><a href="https://internxt.com">internxt.com</a> – Internxt Drive is a zero-knowledge file storage service that’s based on absolute privacy and uncompromising security. Sign up and get 2 GB for free, forever!</li>
<li><a href="https://degoo.com/">degoo.com</a> – AI based cloud storage with free up to 100 Gb, 5 devices, 500 Gb referral bonus (365 days account inactivity).</li>
 </ol>
 
<h2 id="design-and-ui">Design and UI</h2>
 <ol>
<li><a href="https://allthefreestock.com">AllTheFreeStock</a> - a curated list of free stock images, audio and videos.</li>
<li><a href="https://landing.ant.design/">Ant Design Landing Page</a> - Ant Design Landing Page provides a template built by Ant Motion’s motion components. It has a rich homepage template, downloads the template code package, and can be used quickly. You can also use the editor to quickly build your own dedicated page.</li>
<li><a href="https://backlight.dev/">Backlight</a> — With collaboration between developers and designers at heart, Backlight is a very complete coding platform where teams build, document, publish, scale and maintain Design Systems.Free plan allows up to 3 editors working on 1 design system with unlimited viewers.</li>
<li><a href="https://boxy-svg.com/app">BoxySVG</a> — A free installable Web app for drawing SVGs and exporting in svg,png,jpeg an other formats.</li>
<li><a href="https://www.cleverbrush.com/">clevebrush.com</a> — Free Graphics Design / Photo Collage App, also they offer paid integration of it as component.</li>
<li><a href="https://cloudconvert.com/">cloudconvert.com</a> — Convert anything to anything. 208 supported formats including videos to gif.</li>
<li><a href="https://codemyui.com">CodeMyUI</a> - Handpicked collection of Web Design &amp; UI Inspiration with Code Snippets.</li>
<li><a href="https://coolors.co/">coolors</a> - Color palette generator. Free.</li>
<li><a href="https://www.designer.io/">designer.io</a> — Design tool for UI, illustrations and more. Has a native app. Free.</li>
<li><a href="https://www.figma.com">figma.com</a> — Online, collaborative design tool for teams; free tier includes unlimited files and viewers with a max of 2 editors and 3 projects.</li>
<li><a href="https://www.framer.com/">framer.com</a> - Framer helps you iterate and animate interface ideas for your next app, website, or product—starting with powerful layouts. For anyone validating Framer as a professional prototyping tool: unlimited viewers, up to 2 editors, up to 3 projects.</li>
<li><a href="https://www.gradientos.app">Gradientos</a> - Makes choosing a gradient fast and easy.</li>
<li><a href="https://icon.horse">Icon Horse</a> – Get the highest resolution favicon for any website from our simple API.</li>
<li><a href="https://icons8.com">Icons8</a> — Icons, illustrations, photos, music, and design tools. Free Plan offers Limited formats in lower resolution. Link to Icons8 when you use our assets.</li>
<li><a href="https://imagebin.ca/">imagebin.ca</a> — Pastebin for images.</li>
<li><a href="https://www.invisionapp.com">Invision App</a> - UI design and prototyping tool. Desktop and webapp available. Free to use with 1 active prototype.</li>
<li><a href="https://www.landen.co">landen.co</a> — Generate, edit and publish beautiful websites and landing pages for your startup. All without code. Free tier allows you to have one website, fully customizable and published on the web.</li>
<li><a href="https://lensdump.com/">lensdump.com</a> - Free cloud image hosting.</li>
<li><a href="https://picsum.photos/">Lorem Picsum</a> - A Free tool, easy to use stylish placeholders. Just add your desired image size (width &amp; height) after our URL, and you’ll get a random image.</li>
<li><a href="https://lottiefiles.com/">LottieFiles</a> - The world’s largest online platform for the world’s smallest animation format for designers, developers, and more. Access Lottie animation tools and plugins for Android, iOS, and Web.</li>
<li><a href="https://www.magicpattern.design/tools">MagicPattern</a> — A collection of CSS &amp; SVG background generators &amp; tools for gradients, patterns, and blobs.</li>
<li><a href="https://marvelapp.com/">marvelapp.com</a> — Design, prototyping and collaboration, free plan limited to one user and one project.</li>
<li><a href="https://www.mindmup.com/">Mindmup.com</a> — Unlimited mind maps for free, and store them in the cloud. Your mind maps are available everywhere, instantly, from any device.</li>
<li><a href="https://www.mockplus.com/idoc">Mockplus iDoc</a> - Mockplus iDoc is a powerful design collaboration &amp; handoff tool. Free Plan includes 3 users and 5 projects with all features available.</li>
<li><a href="https://mockupmark.com/create/free">mockupmark.com</a> — Create realistic t-shirt and clothing mockups for social media and E-commerce, 40 free mockups.</li>
<li><a href="https://octopus.do">Octopus.do</a> — Visual sitemap builder. Build your website structure in real-time and rapidly share it to collaborate with your team or clients.</li>
<li><a href="https://github.com/evolus/pencil">Pencil</a> - Open source design tool using Electron.</li>
<li><a href="https://penpot.app">Penpot</a> - Web based, open source design and prototyping tool. Supports SVG. Completely free.</li>
<li><a href="https://www.pexels.com/">pexels.com</a> - Free stock photos for commercial use. Has free API that allows you to search photos by keywords.</li>
<li><a href="https://www.photopea.com">photopea.com</a> — A Free, Advanced online design editor with Adobe Photoshop UI supporting PSD, XCF &amp; Sketch formats (Adobe Photoshop, Gimp and Sketch App).</li>
<li><a href="https://pixlr.com/">pixlr.com</a> — Free online browser editor on the level of commercial ones.</li>
<li><a href="https://www.plasmic.app/">Plasmic</a> - A fast, easy to use, powerful web design tool and page builder that integrates into your codebase. Build responsive pages or complex components; optionally extend with code; and publish to production sites and apps.</li>
<li><a href="https://pravatar.cc/">Pravatar</a> - Generate random/placeholder fake avatar, which url can be directly hotlinked in your web/app.</li>
<li><a href="https://www.proto.io">Proto.io</a> - Create fully interactive UI prototypes without coding. Free tier available when free trial ends. Free tier includes: 1 user, 1 project, 5 prototypes, 100MB online storage and preview in proto.io app.</li>
<li><a href="https://resizeappicon.com/">resizeappicon.com</a> — A simple service to resize and manage your app icons.</li>
<li><a href="https://rive.app">Rive</a> — Create and ship beautiful animations to any platform. Free forever for Individuals. The service is a editor which hosts all the graphics on their servers as well. They also provide runtimes for many platforms to run graphics made using Rive.</li>
<li><a href="https://smartmockups.com/">smartmockups.com</a> — Create product mockups, 200 free mockups.</li>
<li><a href="https://tabler-icons.io/">tabler-icons.io</a> — Over 1500 free copy and paste SVG editable icons.</li>
<li><a href="https://ui-avatars.com/">UI Avatars</a> - Generate avatars with initials from names. Which the urls can be directly hotlinked in your web/app. Support config parameters via the url.</li>
<li><a href="https://undraw.co/">unDraw</a> - A constantly updated collection of beautiful svg images that you can use completely free and without attribution.</li>
<li><a href="https://unsplash.com/">unsplash.com</a> - Free stock photos for commercial and noncommercial purposes (do-whatever-you-want license).</li>
<li><a href="https://vectr.com/">vectr.com</a> — Free Design App for Web + Desktop.</li>
<li><a href="https://www.walkme.com/">walkme.com</a> — Enterprise Class Guidance and Engagement Platform, free plan 3 walk-thrus up to 5 steps/walk.</li>
<li><a href="https://webflow.com">Webflow</a> - WYSIWYG web site builder with animations and website hosting. Free for 2 projects.</li>
<li><a href="https://updrafts.app">Updrafts.app</a> - WYSIWYG web site builder for tailwindcss based designs. Free for non-commercial usage.</li>
<li><a href="https://whimsical.com/">whimsical.com</a> - Collaborative flowcharts, wireframes, sticky notes and mind maps. Create up to 4 free boards.</li>
<li><a href="https://zeplin.io/">Zeplin</a> — Designer and developer collaboration platform. Show designs, assets and styleguides. Free for 1 project.</li>
<li><a href="https://pixelixe.com/">Pixelixe</a> — Create and edit engaging and unique graphics and images online.</li>
<li><a href="https://responsively.app">Responsively App</a> - A free dev-tool for faster and precise responsive web application development.</li>
<li><a href="https://scenelab.io">SceneLab</a> - Online mockup graphics editor with an ever-expanding collection of free design templates</li>
<li><a href="https://xlayers.dev">xLayers</a> - Preview and convert Sketch design files into Angular, React, Vue, LitElement, Stencil, Xamarin and more (free and open source at https://github.com/xlayers/xlayers)</li>
<li><a href="https://grapedrop.com/">Grapedrop</a> — Responsive, powerful, SEO optimized web page builder based on GrapesJS Framework. Free for first 5 pages, unlimited custom domains, all features and simple usage.</li>
<li><a href="https://mastershot.app">Mastershot</a> - Completely free browser-based video editor. No watermark, up to 1080p export options.</li>
<li><a href="https://unicornplatform.com/">Unicorn Platform</a> - Effortless landing page builder with hosting. 1 website for free.</li>
<li><a href="https://react-favicon.com/">react-favicon.com</a> - Generate Favicons for your web site using React and JSX using any font and icon library.</li>
<li><a href="https://www.svgrepo.com/">svgrepo.com</a> - Explore, search and find the best fitting icons or vectors for your projects using wide variety vector library. Download free SVG Vectors for commercial use.</li>
 </ol>
 
<h2 id="design-inspiration">Design Inspiration</h2>
 <ol>
<li><a href="https://www.awwwards.com/">awwwards.</a> - [Top websites] A showcases of all the best designed websites (voted on by designers).</li>
<li><a href="https://www.behance.net/">Behance</a> - [Desing showcase] A place where designers showcase their work. Filterable with categories for UI/UX projects.</li>
<li><a href="https://dribbble.com/">dribbble</a> - [Design showcase] Unique design inspiration, generally not from real applications.</li>
<li><a href="https://mobbin.design/">Mobbin</a> - [Mobile screenshots] Save hours of UI &amp; UX research with our library of 50,000+ fully searchable mobile app screenshots.</li>
<li><a href="https://www.mobile-patterns.com/">Mobile Patterns</a> - [Mobile screenshots] A design inspirational library featuring finest UI UX Patterns (iOS and Android) for designers, developers, and product makers to reference.</li>
<li><a href="https://screenlane.com/">Screenlane</a> - [Mobile screenshots] Get inspired and keep up with the latest web &amp; mobile app UI design trends. Filterable by pattern and app.</li>
<li><a href="https://scrnshts.club/">scrnshts</a> - [Mobile screenshots] A hand-picked collection of the finest app store design screenshots.</li>
<li><a href="https://uigarage.net/">UI Garage</a> - [Mobile and web screenshots] Daily UI inspiration &amp; patterns for designers, developers to find inspiration, tools and the best resources for your project.</li>
 </ol>
 
<h2 id="data-visualization-on-maps">Data Visualization on Maps</h2>
 <ol>
<li><a href="https://ipgeolocation.io/">IP Geolocation</a> — Free DEVELOPER plan available with 30K requests/month.</li>
<li><a href="https://carto.com/">carto.com</a> — Create maps and geospatial APIs from your data and public data.</li>
<li><a href="https://developers.arcgis.com">developers.arcgis.com</a> — APIs and SDKs for maps, geospatial data storage, analysis, geocoding, routing, and more across web, desktop, and mobile. 2,000,000 free basemap tiles, 20,000 non-stored geocodes, 20,000 simple routes, 5,000 drive time calculations, 5GB free tile+data storage per month.</li>
<li><a href="https://developer.foursquare.com/">Foursquare</a> - Location discovery, venue search, and context-aware content from Places API and Pilgrim SDK.</li>
<li><a href="https://www.geoapify.com/">geoapify.com</a> - Vector and raster map tiles, geocoding, places, routing, isolines APIs. 3000 free requests / day.</li>
<li><a href="https://www.geocod.io/">geocod.io</a> — Geocoding via API or CSV Upload. 2,500 free queries/day.</li>
<li><a href="https://geocodify.com/">geocodify.com</a> — Geocoding and Geoparsing via API or CSV Upload. 10k free queries/month.</li>
<li><a href="https://www.giscloud.com/">giscloud.com</a> — Visualize, analyze and share geo data online.</li>
<li><a href="https://gogeo.io/">gogeo.io</a> — Maps and geospatial services with an easy to use API and support for big data.</li>
<li><a href="https://www.graphhopper.com/">graphhopper.com</a> A free package for developers is offered for Routing, Route Optimization, Distance Matrix, Geocoding, Map Matching.</li>
<li><a href="https://developer.here.com/">here</a> — APIs and SDKs for maps and location-aware apps. 250k transactions/month for free.</li>
<li><a href="https://www.mapbox.com/">mapbox.com</a> — Maps, geospatial services and SDKs for displaying map data.</li>
<li><a href="https://www.maptiler.com/cloud/">maptiler.com</a> — Vector maps, map services and SDKs for map visualisation. Free vector tiles with weekly update and four map styles.</li>
<li><a href="https://opencagedata.com">opencagedata.com</a> — Geocoding API that aggregates OpenStreetMap and other open geo sources. 2,500 free queries/day.</li>
<li><a href="https://osmnames.org/">osmnames</a> — Geocoding, search results ranked by the popularity of related Wikipedia page.</li>
<li><a href="https://positionstack.com/">positionstack</a> - Free geocoding for global places and coordinates. 25.000 Requests per month for personal use.</li>
<li><a href="https://stadiamaps.com/">stadiamaps.com</a> — Map tiles, routing, navigation, and other geospatial APIs. 2,500 free map views and API requests / day for non-commercial usage and testing.</li>
<li><a href="http://maps.stamen.com/">maps.stamen.com</a> - Free map tiles and tile hosting.</li>
<li><a href="https://geocodeapi.io">GeocodeAPI</a> - Geocode API: Address to Coordinate Conversion &amp; Geoparsing based on Pelias. Batch geocoding via CSV. 350000 free requests/month.</li>
<li><a href="https://geokeo.com">Geokeo api</a> - Geocoding api with language correction and more. Worldwide coverage. 2,500 free daily queries</li>
 </ol>
 
<h2 id="package-build-system">Package Build System</h2>
 <ol>
<li><a href="https://build.opensuse.org/">build.opensuse.org</a> — Package build service for multiple distros (SUSE, EL, Fedora, Debian etc).</li>
<li><a href="https://copr.fedorainfracloud.org">copr.fedorainfracloud.org</a> — Mock-based RPM build service for Fedora and EL.</li>
<li><a href="https://help.launchpad.net/Packaging">help.launchpad.net</a> — Ubuntu and Debian build service.</li>
 </ol>
 
<h2 id="ide-and-code-editing">IDE and Code Editing</h2>
 <ol>
<li><a href="https://3v4l.org/">3v4l</a> - Free online PHP shell and snippet sharing site, runs your code in 300+ PHP versions</li>
<li><a href="https://d.android.com/studio">Android Studio</a> — Android Studio provides the fastest tools for building apps on every type of Android device. Open Source IDE, free for everyone and the best to develop Android apps. Available for Windows,Mac,Linux and even ChromeOS!</li>
<li><a href="https://netbeans.apache.org/">Apache Netbeans</a> — Development Environment, Tooling Platform and Application Framework.</li>
<li><a href="https://apiary.io/">apiary.io</a> — Collaborative design API with instant API mock and generated documentation (Free for unlimited API blueprints and unlimited user with one admin account and hosted documentation).</li>
<li><a href="https://atom.io/">Atom</a> - Atom is a hackable text editor built on Electron.</li>
<li><a href="https://mybinder.org/">Binder</a> - Turn a Git repo into a collection of interactive notebooks. It is a free, public service.</li>
<li><a href="https://bluej.org">BlueJ</a> — A free Java Development Environment designed for beginners, used by millions worldwide. Powered by Oracle &amp; simple GUI to help beginners.</li>
<li><a href="https://bootify.io/">Bootify.io</a> - Spring Boot app generator with custom database and REST API.</li>
<li><a href="https://www.cacher.io">cacher.io</a> — Code snippet organizer with labels and support for 100+ programming languages.</li>
<li><a href="https://codeblocks.org">Code::Blocks</a> — Free Fortran &amp; C/C++ IDE. Open Source and runs on Windows,macOS &amp; Linux.</li>
<li><a href="https://codiga.io/">codiga.io</a> — Coding Assistant that lets you search, define and reuse code snippets directly in your IDE. Free for individual and small organizations.</li>
<li><a href="https://codesnip.com.br">codesnip.com.br</a> — Simple code snippets manager with categories, search and tags. free and unlimited.</li>
<li><a href="https://cocalc.com/">cocalc.com</a> — (formerly SageMathCloud at cloud.sagemath.com) — Collaborative calculation in the cloud. Browser access to full Ubuntu with built-in collaboration and lots of free software for mathematics, science, data science, preinstalled: Python, LaTeX, Jupyter Notebooks, SageMath, scikitlearn, etc.</li>
<li><a href="https://ide.cs50.io/">ide.cs50.io</a> - A free IDE powered by AWS Cloud9 by Harvard University.</li>
<li><a href="https://codepen.io/">codepen.io</a> — CodePen is a playground for the front end side of the web.</li>
<li><a href="https://codesandbox.io/">codesandbox.io</a> — Online Playground for React, Vue, Angular, Preact and more.</li>
<li><a href="https://webcomponents.dev/">Components.studio</a> - Code components in isolation, visualize them in stories, test them and publish them on npm.</li>
<li><a href="https://www.eclipse.org/che/">Eclipse Che</a> - Web based and Kubernetes-Native IDE for Developer Teams with multi-language support. Open Source and community driven. A online instance hosted by Red Hat is available at <a href="https://workspaces.openshift.com/">workspaces.openshift.com</a>.</li>
<li><a href="https://fakejson.com/">fakejson.com</a> — FakeJSON helps you quickly generate fake data using its API. Make an API request describing what you want and how you want it. The API returns it all in JSON. Speed up the go to market process for ideas and fake it till you make it.</li>
<li><a href="https://www.gitpod.io">gitpod.io</a> — Instant, ready-to-code dev environments for GitHub projects. Free for open source.</li>
<li><a href="https://ide.goorm.io">ide.goorm.io</a> goormIDE is full IDE on cloud. multi-language support, linux-based container via the fully-featured web-based terminal, port forwarding, custom url, real-time collaboration and chat, share link, Git/Subversion support. There are many more features (free tier includes 1GB RAM and 10GB Storage per container, 5 Container slot).</li>
<li><a href="https://www.jdoodle.com">JDoodle</a> — Online compiler and editor for more than 60 programming languages with a free plan for REST API code compiling up to 200 credits per day.</li>
<li><a href="https://jetbrains.com/products.html">jetbrains.com</a> — Productivity tools, IDEs and deploy tools (aka <a href="https://www.jetbrains.com/idea/">IntelliJ IDEA</a>, <a href="https://www.jetbrains.com/pycharm/">PyCharm</a>, etc). Free license for students, teachers, Open Source and user groups.</li>
<li><a href="https://jsbin.com">jsbin.com</a> — JS Bin is another playground and code sharing site of front end web (HTML, CSS and JavaScript. Also supports Markdown, Jade and Sass).</li>
<li><a href="https://jsfiddle.net/">jsfiddle.net</a> — JS Fiddle is a playground and code sharing site of front end web, support collaboration as well.</li>
<li><a href="http://jsonplaceholder.typicode.com/">JSONPlaceholder</a> Some REST API endpoints that return some fake data in JSON format. The source code is also available if you would like to run the server locally.</li>
<li><a href="https://katacoda.com">Katacoda</a> — Interactive learning and training platform for software engineers helping developers learn and companies increase adoption.</li>
<li><a href="https://www.lazarus-ide.org/">Lazarus</a> — Lazarus is a Delphi compatible cross-platform IDE for Rapid Application Development.</li>
<li><a href="https://micro-jaymock.now.sh/">micro-jaymock</a> - Tiny API mocking microservice for generating fake JSON data.</li>
<li><a href="https://www.mockable.io/">mockable.io</a> — Mockable is a simple configurable service to mock out RESTful API or SOAP web-services. This online service allows you to quickly define REST API or SOAP endpoints and have them return JSON or XML data.</li>
<li><a href="https://mockaroo.com/">mockaroo</a> — Mockaroo lets you generate realistic test data in CSV, JSON, SQL, and Excel formats. You can also create mocks for back-end API.</li>
<li><a href="https://mocklets.com">Mocklets</a> - a HTTP-based mock API simulator, which helps simulate APIs for faster parallel development and more comprehensive testing, with lifetime free tier.</li>
<li><a href="https://paiza.cloud/en/">Paiza</a> — Develop Web apps in Browser without having the need to setup anything. Free Plan offers 1 server with 24 hours lifetime and 4 hours running time per day with 2 CPU cores, 2 GB RAM and 1 GB storage.</li>
<li><a href="https://prepros.io/">Prepros</a> - Prepros can compile Sass, Less, Stylus, Pug/Jade, Haml, Slim, CoffeeScript and TypeScript out of the box, reloads your browsers and makes it really easy to develop &amp; test your websites so you can focus on making them perfect. You can also add your own tools with just a few clicks.</li>
<li><a href="https://replit.com/">Replit</a> — A cloud coding environment for various program languages.</li>
<li><a href="https://code.sololearn.com">SoloLearn</a> — A cloud programming playground well-suited for running code snippets. Supports various programming languages. No registration required for running code but required when you need to save code on their platform. Also offers free courses for begginers and intermediate level coders.</li>
<li><a href="https://stackblitz.com/">stackblitz.com</a> — Online/Cloud Code IDE to create, edit, &amp; deploy fullstack apps. Support any popular NodeJs based frontend &amp; backend frameworks. Shortlink to create new project: <a href="https://node.new">https://node.new</a>.</li>
<li><a href="https://code.visualstudio.com/">Visual Studio Code</a> - Code editor redefined and optimized for building and debugging modern web and cloud applications. Developed by Microsoft for Windows, macOS and Linux.</li>
<li><a href="https://visualstudio.microsoft.com/vs/community/">Visual Studio Community</a> — Fully-featured IDE with thousands of extensions, cross-platform app development (Microsoft extensions available for download for iOS and Android), desktop, web and cloud development, multi-language support (C#, C++, JavaScript, Python, PHP and more).</li>
<li><a href="https://vscodium.com/">VSCodium</a> - Community-driven, without telemetry/tracking, and freely-licensed binary distribution of Microsoft’s editor VSCode</li>
<li><a href="https://wakatime.com/">wakatime.com</a> — Quantified self-metrics about your coding activity, using text editor plugins, limited plan for free.</li>
<li><a href="https://webcomponents.dev/">WebComponents.dev</a> — In-browser IDE to code web components in isolation with 58 templates available, supporting stories and tests.</li>
 </ol>
 
<h2 id="analytics-events-and-statistics">Analytics, Events and Statistics</h2>
 <ol>
<li><a href="https://analytics.statvoo.com/">Statvoo Analytics</a> — Forever FREE Customer Analytics for ALL your websites, with Unlimited Events per month</li>
<li><a href="https://avo.app/">Avo</a> — Simplified analytics release workflow. Single-source-of-truth tracking plan, type safe analytics tracking library, in-app debuggers, data observability to catch all data issues before you release. Free for 2 workspace members and 1 hour data observability lookback.</li>
<li><a href="https://branch.io">Branch</a> — Mobile Analytics Platform. Free Tier offers upto 10K Mobile App Users with deep-linking &amp; other services.</li>
<li><a href="https://clicky.com">Clicky</a> — Website Analytics Platform. Free Plan for 1 website with 3000 views analytics.</li>
<li><a href="https://databox.com">Databox</a> — Business Insights &amp; Analytics by combining other analytics &amp; BI platforms. Free Plan offers 3 users, dashboards &amp; data sources. 11M historical data records.</li>
<li><a href="https://deploywithflags.com">Deploy With Flags</a> — Feature Flags Service. Free for individual developers managing flags for a single project.</li>
<li><a href="https://indicative.com/">indicative.com</a> — Customer analytics platform to optimize customer engagement, increase conversion, and improve retention. Free up to 50M events/month.</li>
<li><a href="https://panelbear.com/">Panelbear.com</a> — Blazingly fast and private, free tier includes 5,000 pageviews per month for unlimited websites</li>
<li><a href="https://hitsteps.com/">Hitsteps.com</a> — 2,000 pageviews per month for 1 website</li>
<li><a href="https://amplitude.com/">amplitude.com</a> — 1 million monthly events, up to 2 apps</li>
<li><a href="https://www.molasses.app">Flagsmith</a> - Release features with confidence; manage feature flags across web, mobile, and server side applications. Use our hosted API, deploy to your own private cloud, or run on-premise</li>
<li><a href="https://www.goatcounter.com/">GoatCounter</a> — GoatCounter is an open source web analytics platform available as a hosted service (free for non-commercial use) or self-hosted app. It aims to offer easy to use and meaningful privacy-friendly web analytics as an alternative to Google Analytics or Matomo. Free tier is for non-commerical use and includes unlimited number of sites, 6 months of data retention, and 100k pageviews/month.</li>
<li><a href="https://analytics.google.com/">Google Analytics</a> — Google Analytics</li>
<li><a href="https://www.expensify.com/">Expensify</a> — Expense reporting, free personal reporting approval workflow</li>
<li><a href="https://getinsights.io">getinsights.io</a> - Privacy-focused, cookie free analytics, free for up to 5k events/month.</li>
<li><a href="https://heap.io">heap.io</a> — Automatically captures every user action in iOS or web apps. Free for up to 5,000 visits/month</li>
<li><a href="https://hotjar.com">Hotjar</a> — Website Analytics and Reports . Free Plan allows 2000 pageviews/day. 100 snapshots/day (max capacity: 300). 3 snapshot heatmaps which can be stored for 365 days. Unlimited Team Members.</li>
<li><a href="https://keen.io/">Keen</a> — Custom Analytics for data collection, analysis and visualization. 50,000 events/month free</li>
<li><a href="https://metrica.yandex.com/">Yandex.Metrica</a> — Unlimited free analytics</li>
<li><a href="https://mixpanel.com/">Mixpanel</a> — 100,000 monthly tracked users, unlimited data history and seats, US or EU data residency</li>
<li><a href="https://www.moesif.com">Moesif</a> — API analytics for REST and GraphQL. (Free up to 500,000 API calls/mo)</li>
<li><a href="https://www.molasses.app">Molasses</a> - Powerful feature flags and A/B testing. Free up to 3 environments with 5 feature flags each.</li>
<li><a href="https://www.optimizely.com">optimizely.com</a> — A/B Testing solution, free starter plan, 1 website, 1 iOS and 1 Android app</li>
<li><a href="https://powerbi.com">Microsoft PowerBI</a> — Business Insights &amp; Analytics by Microsoft. Free Plan offers limited use with 1 Million User licenses.</li>
<li><a href="https://www.quantcast.com/products/measure-audience-insights/">quantcast.com</a> — Unlimited free analytics</li>
<li><a href="https://sematext.com/cloud/">sematext.com</a> — Free for up to 50 K actions/month, 1-day data retention, unlimited dashboards, users, etc.</li>
<li><a href="https://similarweb.com">Similar Web</a> — Analytics for Web &amp; Mobile Apps. Free Plan offers 5 results per metric, 1 month of mobile app data &amp; 3 months of website data.</li>
<li><a href="https://statcounter.com/">StatCounter</a> — Website Viewer Analytics. Free plan for analytics of 500 most recent visitors.</li>
<li><a href="https://www.tableau.com/developer">Tableau Developer Program</a> — Innovate, create, and make Tableau work perfectly for your organization. Free developer program gives a personal development sandbox license for Tableau Online. The version is the latest pre-release version so Data Devs can test each &amp; every feature of this superb platform.</li>
<li><a href="https://usabilityhub.com/">usabilityhub.com</a> — Test designs and mockups on real people, track visitors. Free for one user, unlimited tests</li>
<li><a href="https://www.woopra.com/">woopra.com</a> — Free user analytics platform for 500K actions, 90 day data retention, 30+ one click integration.</li>
<li><a href="https://counter.dev">counter.dev</a> — Web analytics made simple and therefore privacy friendly. Free or pay what you want by donation.</li>
<li><a href="https://posthog.com">PostHog</a> - Full Product Analytics suite free for up to 1m tracked events per month</li>
 </ol>
 
<h2 id="visitor-session-recording">Visitor Session Recording</h2>
 <ol>
<li><a href="https://www.visualime.com/">Visualime.com</a> — Free and unlimited session recordings, no traffic limits</li>
<li><a href="https://www.reactflow.com/">Reactflow.com</a> — Per site: 1,000 pages views/day, 3 heatmaps, 3 widgets, free bug tracking</li>
<li><a href="https://www.logrocket.com">LogRocket.com</a> - 1,000 sessions/month with 30 day retention, error tracking, live mode</li>
<li><a href="https://www.fullstory.com">FullStory.com</a> — 1,000 sessions/month with 1 month data retention and 3 user seats. More information <a href="https://help.fullstory.com/hc/en-us/articles/360020623354-FullStory-Free-Edition">here</a>.</li>
<li><a href="https://www.hotjar.com/">hotjar.com</a> — Per site: 2,000 pages views/day, 3 heatmaps, data stored for 3 months,…</li>
<li><a href="https://www.inspectlet.com/">inspectlet.com</a> — 2,500 sessions/month free for 1 website</li>
<li><a href="https://livesession.io/">livesession.io</a> — 5,000 sessions/month free for 1 website</li>
<li><a href="https://clarity.microsoft.com/">Microsoft Clarity</a> - Session recording completely free with “no traffic limits”, no project limits, and no sampling</li>
<li><a href="https://mouseflow.com/">mouseflow.com</a> — 500 sessions/month free for 1 website</li>
<li><a href="https://www.mousestats.com/">mousestats.com</a> — 100 sessions/month free for 1 website</li>
<li><a href="https://www.smartlook.com/">smartlook.com</a> — free packages for web and mobile apps (1500 sessions/month), 3 heatmaps, 1 funnel, 1-month data history</li>
<li><a href="https://www.usersurge.com/">usersurge.com</a> — 250K sessions per month for individuals.</li>
<li><a href="https://howuku.com">howuku.com</a> — Track user interaction, engagement, and event. Free for up to 5,000 visits/month</li>
<li><a href="https://www.uxtweak.com/">UXtweak.com</a> — Record and watch how visitors use your web site or app. Free unlimited time for small projects</li>
 </ol>
 
<h2 id="international-mobile-number-verification-api-and-sdk">International Mobile Number Verification API and SDK</h2>
 <ol>
<li><a href="https://cognalys.com/">Cognalys</a> — Freemium mobile number verification through an innovative and reliable method than using SMS gateway. Free 10 tries and 15 verifications/day</li>
<li><a href="https://numverify.com/">numverify</a> — Global phone number validation and lookup JSON API. 250 API requests/month</li>
<li><a href="https://veriphone.io/">veriphone</a> — Global phone number verification in a free, fast, reliable JSON API. 1000 requests/month</li>
 </ol>
 
<h2 id="payment-and-billing-integration">Payment and Billing Integration</h2>
 <ol>
<li><a href="https://currencyfreaks.com/">CurrencyFreaks</a> — Provides current and historical currency exchange rates. Free DEVELOPER plan available with 1000 requests/month.</li>
<li><a href="https://currencyapi.net/">CurrencyApi</a> — Live Currency Rates for Physical and Crypto currencies, delivered in JSON and XML. Free tier offers 1,250 API requests/month.</li>
<li><a href="https://currencylayer.com/">currencylayer</a> — Reliable Exchange Rates and Currency Conversion for your Business, 1,000 API requests/month free</li>
<li><a href="https://currencystack.io/">currencystack.io</a> — Production-ready real-time exchange rates for 154 currencies.</li>
<li><a href="https://www.exchangerate-api.com">exchangerate-api.com</a> - An easy to use currency conversion JSON API. Free tier with no request limit.</li>
<li><a href="https://www.fraudlabspro.com">FraudLabsPRO</a> — Help merchants to prevent payment fraud and chargebacks. Free Micro Plan available with 500 queries/month.</li>
<li><a href="https://mailpop.in">MailPopin</a> - Get the most of your Stripe notifications with contextualized information.</li>
<li><a href="https://www.namiml.com/">Nami ML</a> - Complete platform for in-app purchases and subscriptions on iOS and Android, including no-code paywalls, CRM, and analytics. Free for all base features to run an IAP business.</li>
<li><a href="https://www.revenuecat.com/">RevenueCat</a> — Hosted backend for in-app purchases and subscriptions (iOS and Android). Free up to $10k/mo in tracked revenue.</li>
<li><a href="https://vatlayer.com/">vatlayer</a> — Instant VAT number validation and EU VAT rates API, free 100 API requests/month</li>
<li><a href="https://freecurrencyapi.net/">Freecurrencyapi.net</a> — Free currency conversion and exchange rate data API. 10 requests/hour without an API key, 50 000 requests per month when you register for free.</li>
 </ol>
 
<h2 id="docker-related">Docker Related</h2>
 <ol>
<li><a href="https://canister.io/">canister.io</a> — 20 free private repositories for developers, 30 free private repositories for teams to build and store Docker images</li>
<li><a href="https://container-registry.com/">Container Registry Service</a> - Harbor based Container Management Solution. Free tier offers 1 GB storage for private repositories.</li>
<li><a href="https://hub.docker.com">Docker Hub</a> — One free private repository and unlimited public repositories to build and store Docker images</li>
<li><a href="https://labs.play-with-docker.com/">Play with Docker</a> — A simple, interactive and fun playground to learn Docker.</li>
<li><a href="https://quay.io/">quay.io</a> — Build and store container images with unlimited free public repositories</li>
<li><a href="https://treescale.com/">TreeScale.com</a> — Host and manage container images with group permissions. Free tier offers 1 GB storage for private repositories.</li>
<li><a href="https://platform9.com/">Platform9</a> - Managed Kubernetes plane. Free plan offers management capabilities up to 3 clusters &amp; 20 nodes. Note: you must provide cluster infrastructure by yourself.</li>
 </ol>
 
<h2 id="vagrant-related">Vagrant Related</h2>
 <ol>
<li><a href="https://app.vagrantup.com">Vagrant Cloud</a> - HashiCorp Vagrant Cloud. Vagrant box hosting.</li>
<li><a href="https://www.vagrantbox.es/">Vagrantbox.es</a> — An alternative public box index</li>
 </ol>
 
<h2 id="dev-blogging-sites">Dev Blogging Sites</h2>
 <ol>
<li><a href="https://bearblog.dev/">BearBlog</a> - Minimalist, and Markdown powered blog and website builder.</li>
<li><a href="https://dev.to/">Dev.to</a> - Where programmers share ideas and help each other grow.</li>
<li><a href="https://hashnode.com/">Hashnode</a> — Hassle-free Blogging Software for Developers!.</li>
<li><a href="https://medium.com/">Medium</a> — Get smarter about what matters to you.</li>
 </ol>
 
<h2 id="commenting-platforms">Commenting Platforms</h2>
 <ol>
<li><a href="https://staticman.net/">Staticman</a> - Staticman is a Node.js application that receives user-generated content and uploads it as data files to a GitHub and/or GitLab repository, using Pull Requests.</li>
<li><a href="https://graphcomment.com/">GraphComment</a> - GraphComment is a comments platform that helps you build an active community from website’s audience.</li>
<li><a href="https://utteranc.es/">Utterances</a> - A lightweight comments widget built on GitHub issues. Use GitHub issues for blog comments, wiki pages and more!</li>
<li><a href="https://disqus.com/">Disqus</a> - Disqus is a networked community platform used by hundreds of thousands of sites all over the web.</li>
 </ol>
 
<h2 id="screenshot-apis">Screenshot APIs</h2>
 <ol>
<li><a href="https://www.24browser.com">24browser.com</a> – Capture beautifully rendered website screenshots at scale with powerful API.</li>
<li><a href="https://apiflash.com">ApiFlash</a> — A screenshot API based on Aws Lambda and Chrome. Handles full page, capture timing, viewport dimensions, …</li>
<li><a href="https://microlink.io/">microlink.io</a> – It turns any website into data such as metatags normalization, beauty link previews, scraping capabilities or screenshots as a service. 250 reqs/day every day free.</li>
<li><a href="https://screenshotapi.net/">ScreenshotAPI.net</a> - Screenshot API use one simple API call to generate screenshots of any website. Build to scale and hosted on Google Cloud. Offers 100 free screenshots per month.</li>
<li><a href="https://screenshotlayer.com/">screenshotlayer.com</a> — Capture highly customizable snapshots of any website. Free 100 snapshots/month</li>
<li><a href="https://www.screenshotmachine.com/">screenshotmachine.com</a> — Capture 100 snapshots/month, png, gif and jpg, including full-length captures, not only home page</li>
<li><a href="https://PhantomJsCloud.com">PhantomJsCloud</a> — Browser automation and page rendering. Free Tier offers up to 500 pages/day. Free Tier since 2017.</li>
<li><a href="https://webshrinker.com">Webshrinker.com</a> — Web Shrinker provides web site screenshot and domain intelligence API services. Free 100 requests/month.</li>
 </ol>
 
<h2 id="browser-based-hardware-emulation-written-in-javascript">Browser based hardware emulation written in Javascript</h2>
 <ol>
<li><a href="https://bellard.org/jslinux">JsLinux</a> — a really fast x86 virtual machine capable of running Linux and Windows 2k.</li>
<li><a href="http://s-macke.github.io/jor1k/demos/main.html">Jor1k</a> — a OpenRISC virtual machine capable of running Linux with network support.</li>
<li><a href="https://copy.sh/v86">v86</a> — a x86 virtual machine capable of running Linux and other OS directly into the browser.</li>
 </ol>
 
<h2 id="privacy-management">Privacy Management</h2>
 <ol>
<li><a href="https://www.bearer.sh/">Bearer</a> - Helps implement privacy by design via audits and continuous workflows so that organizations comply with GDPR and other regulations. Free tier is limited to smaller teams and SaaS version only.</li>
<li><a href="https://www.osano.com/">Osano</a> - Consent management and compliance platform with everything from GDPR representation to cookie banners. Free tier offers basic features.</li>
<li><a href="https://www.iubenda.com/">Iubenda</a> - Privacy and cookie policies along with consent management. Free tier offers limited privacy and cookie policy as well as cookie banners.</li>
<li><a href="https://cookiefirst.com/">Cookiefirst</a> - Cookie banners, auditing, and multi-language consent management solution. Free tier offers a one-time scan and a single banner.</li>
<li><a href="https://www.ketch.com/">Ketch</a> - Consent management and privacy framework tool. Free tier offers most features with a limited visitor count.</li>
 </ol>
 
<h2 id="miscellaneous">Miscellaneous</h2>
 <ol>
<li><a href="https://smartcar.com">Smartcar API</a> - An API for cars to locate, get fuel tank, battery levels, odometer, unlock/lock doors, etc.</li>
<li><a href="https://blynk.io">Blynk</a> — A SaaS with API to control, build &amp; evaluate IoT devices. Free Developer Plan with 5 devices,Free Cloud &amp; data storage. Mobile Apps also available.</li>
<li><a href="https://free.getbricks.app/">Bricks Note Calculator</a> - a note-taking app (PWA) with a powerful built-in multiline calculator.</li>
<li><a href="https://carbon.now.sh">Carbon.now.sh</a> - create and share code snippet in an aesthetic screenshot-like image format. Usually used to aesthetically share/show-off code snippet on Twitter or blog posts.</li>
<li><a href="https://www.software.com/code-time">Code Time</a> - an extension for time-tracking and coding metrics in VS Code, Atom, IntelliJ, Sublime Text, and more.</li>
<li><a href="https://www.codepng.app">Codepng</a> - Create awesome snapshots from your source code that you can share on social media.</li>
<li><a href="https://configcat.com">ConfigCat</a> - Cross-platform feature flag service. SDKs for all major languages. Free plan up to 10 flags, 2 environments, 1 product and 5 Million requests per month. Unlimited user seats. Students get 100 flags and 100 Million requests per month for free.</li>
<li><a href="https://datelist.io">datelist.io</a> - Online booking / appointment scheduling system. Free up to 5 bookings per month, includes 1 calendar</li>
<li><a href="https://www.docsapp.io/">docsapp.io</a> — Easiest way to publish documentation, free for Open Source</li>
<li><a href="https://elementor.com">Elementor</a> — WordPress website builder. Free plan available with 40+ Basic Widgets.</li>
<li><a href="https://form2channel.com">Form2Channel</a> — Place a static html form on your website and receive submissions directly to Google Sheets, Email, Slack, Telegram or Http. No coding necessary.</li>
<li><a href="https://fossa.com/">FOSSA</a> - Scalable, end-to-end management for third-party code, license compliance and vulnerabilities.</li>
<li><a href="https://www.fullcontact.com/developer/pricing/">fullcontact.com</a> — Help your users know more about their contacts by adding social profile into your app. 500 free Person API matches/month</li>
<li><a href="https://http2.pro">http2.pro</a> — HTTP/2 protocol readiness test and client HTTP/2 support detection API.</li>
<li><a href="https://jwt.ssotools.com/">JWT Decoder</a> — Online free tool for decoding JWT(JSON web token) and verifying it’s signature.</li>
<li><a href="https://devpal.co/base64-decode/">Base64 decoder/encoder</a> — Online free tool for decoding &amp; encoding data.</li>
<li><a href="https://newreleases.io/">newreleases.io</a> - Receive notifications on email, Slack, Telegram, Discord and custom webhooks for new releases from GitHub, GitLab, Bitbucket, Python PyPI, Java Maven, Node.js NPM, Node.js Yarn, Ruby Gems, PHP Packagist, .NET NuGet, Rust Cargo and Docker Hub.</li>
<li><a href="https://www.pdfmonkey.io/">PDFMonkey</a> — Manage PDF templates in a dashboard, call the API with dynamic data, download your PDF. Offers 1000 free documents per month.</li>
<li><a href="https://quicktype.io/">QuickType.io</a> - Quickly auto generate models/class/type/interface and serializers from JSON, schema, and GraphQL for working with data quickly &amp; safely in any programming language. Convert JSON into gorgeous, typesafe code in any language.</li>
<li><a href="https://ray.so/">ray.so</a> - Create beautiful images of your code snippets.</li>
<li><a href="https://readme.com/">readme.com</a> — Beautiful documentation made easy, free for Open Source.</li>
<li><a href="https://redirection.io/">redirection.io</a> — SaaS tool for managing HTTP redirections for businesses, marketing and SEO.</li>
<li><a href="https://redirect.pizza/">redirect.pizza</a> - Easily manage redirects with HTTPS support. Free plan includes 10 sources and 100.000 hits per month.</li>
<li><a href="https://www.reqbin.com/">ReqBin</a> — Post HTTP Requests Online. Popular Request Methods include GET, POST, PUT, DELETE, and HEAD. Supports Headers and Token Authentication. Includes a basic login system for saving your requests.</li>
<li><a href="https://superfeedr.com/">superfeedr.com</a> — Real-time PubSubHubbub compliant feeds, export, analytics. Free with less customization</li>
<li><a href="https://www.surveymonkey.com">SurveyMonkey.com</a> — Create online surveys. Analyze the results online. Free plan allows only 10 questions and 100 responses per survey.</li>
<li><a href="https://videoinu.com">videoinu</a> — Create and edit screen recordings and other videos online.</li>
<li><a href="https://randomkeygen.com/">RandomKeygen</a> - A free mobile-friendly tool offers a variety of randomly generated keys and passwords you can use to secure any application, service or device.</li>
<li><a href="https://cronhooks.io/">Cronhooks</a> - Replace your cron jobs with webhooks. Invoke any webhook at a given date time or repeatedly using cron expressions. Free plan allows 1 webhook schedule.</li>
<li><a href="https://www.hookrelay.dev/">Hook Relay</a> - Add webhook support to your app without the hassles: done-for-you queueing, retries with backoff, and logging. The free plan has 100 deliveries per day, 14-day retention, and 3 hook endpoints.</li>
<li><a href="https://www.format-express.dev">Format Express</a> - Instant online formatter for JSON / XML / SQL.</li>
 </ol>
 
<h2 id="remote-desktop-tools">Remote Desktop Tools</h2>
 <ol>
<li><a href="https://getscreen.me">Getscreen.me</a> — Free for 2 devices, no limits on the number and duration of sessions</li>
<li><a href="https://guacamole.apache.org/">Apache Guacamole™</a> — Open source clientless remote desktop gateway</li>
 </ol>
 
<h2 id="other-free-resources">Other Free Resources</h2>
 <ol>
<li><a href="https://get.localhost.direct">get.localhost.direct</a> — A better *.localhost.direct Wildcard public CA signed SSL cert for localhost development with sub-domain support<br />
</li>
<li><a href="https://nic.eu.org">eu.org</a> — Free eu.org domain. Request is usually approved in 14 days.</li>
<li><a href="https://js.org">js.org</a> - Free js.org subdomains for GitHub Pages for the JavaScript community.</li>
<li><a href="https://nic.ua/">pp.ua</a> — Free pp.ua subdomains.</li>
<li><a href="https://degooglisons-internet.org/en/list/">Framacloud</a> — A list of Free/Libre Open Source Software and SaaS by the French non-profit <a href="https://framasoft.org/en/">Framasoft</a>.</li>
<li><a href="https://getawesomeness.herokuapp.com">getawesomeness</a> — Retrieve all amazing awesomeness from GitHub… a must see</li>
<li><a href="https://github.com/tvvocold/FOSS-for-Dev">github.com — FOSS for Dev</a> — A hub of free and Open Source software for developers.</li>
<li><a href="https://education.github.com/pack">GitHub Education</a> — Collection of free services for students. Registration required.</li>
<li><a href="https://www.is-a.dev/">is-a.dev</a> — Free <code>*.is-a.dev</code> subdomain for developers.</li>
<li><a href="https://developer.microsoft.com/microsoft-365/dev-program">Microsoft 365 Developer Program</a> — Get a free sandbox, tools, and other resources you need to build solutions for the Microsoft 365 platform. The subscription is a 90-day <a href="https://www.microsoft.com/microsoft-365/enterprise/e5">Microsoft 365 E5 Subscription</a> (Windows excluded) which is renewable. It is renewed if you’re active in development(measured using telemetry data &amp; algorithms).</li>
<li><a href="https://developers.redhat.com">RedHat for Developers</a> — Free access to Red Hat products including RHEL,OpenShift,CodeReady etc exclusively for developers. Individual plan only. Free e-Books also offered for reference.</li>
<li><a href="https://smsreceivefree.com/">smsreceivefree.com</a> — Provides free temporary and disposable phone numbers.</li>
<li><a href="https://simplebackups.io/">simplebackups.io</a> — Backup automation service for servers and databases (MySQL, PostgreSQL, MongoDB) stored directly into cloud storage providers (AWS, DigitalOcean, Backblaze…). Provides free plan for 1 backup.</li>
<li><a href="https://snapshooter.com/">SnapShooter</a> — Backup solution for DigitalOcean, AWS, LightSail, Hetzner and Exoscale, with support for direct database, file system and application backups to s3 based storage. Provides a free plan with daily backups for one resource.</li>
<li><a href="https://thedev.id">thedev.id</a> — A free thedev.id subdomain for developers.</li>
<li><a href="https://themeselection.com/">Themeselection</a> — Selected high quality, modern design, professional and easy-to-use Free Admin Dashboard Template, HTML Themes and UI Kits to create your applications faster!</li>
<li><a href="https://web.dev/measure/">Web.Dev</a> — This is a free tool that allows you to see the performance of your website and improve the SEO to get higher rank list in search engines.</li>
<li><a href="https://smalldev.tools/">SmallDev.tools</a> — A free tool for developers that allows you to Encode/Decode various formats, Minify HTML/CSS/Javascript, Beautify, Generate Fake/Testing real like dataset in JSON/CSV &amp; multiple other formats and many more features. With a delightful interface.</li>
 </ol>

<script>
function sortList(clicked_id) {
  var list, i, switching, b, shouldSwitch;
  list = document.getElementById(clicked_id);
  switching = true;
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // start by saying: no switching is done:
    switching = false;
    b = list.getElementsByTagName("LI");
    // Loop through all list-items:
    for (i = 0; i < (b.length - 1); i++) {
      // start by saying there should be no switching:
      shouldSwitch = false;
      /* check if the next item should
      switch place with the current item: */
      if (b[i].innerHTML.toLowerCase() > b[i + 1].innerHTML.toLowerCase()) {
        /* if next item is alphabetically
        lower than current item, mark as a switch
        and break the loop: */
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark the switch as done: */
      b[i].parentNode.insertBefore(b[i + 1], b[i]);
      switching = true;
    }
  }
}

//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

</script>
<script>
function myFunction() {
  // Declare variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('myInput');
  filter = input.value.toUpperCase();
  ul = document.getElementById("myUL");
  li = ul.getElementsByTagName('li');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>
<style>
/*body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
}*/

#myBtn {
  display: none;
  position: fixed;
  bottom: 10px;
  right: 20px;
  z-index: 99;
  font-size: 10px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 10px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
h1{
padding-left: 60px;
}
h2{
padding-left: 60px;
}

#myInput {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}

#myUL {
  /* Remove default list styling */
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd; /* Add a border to all links */
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6; /* Grey background color */
  padding: 8px; /* Add some padding */
  text-decoration: none; /* Remove default text underline */
  font-size: 18px; /* Increase the font-size */
  color: black; /* Add a black text color */
  display: block; /* Make it into a block element to fill the whole list */
}

#myUL li a:hover:not(.header) {
  background-color: #eee; /* Add a hover effect to all links, except for headers */
}
</style>