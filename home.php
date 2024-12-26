
<?php
session_start();

include("connection.php");

if (!isset($_SESSION['username'])) {
    header("location:login.php");
}




?>
<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.9.24, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/gemini-generated-image-j9ga48j9ga48j9ga.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Home</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/animatecss/animate.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link href="assets/fonts/style.css" rel="stylesheet">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css?v=cQ3Q9M"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css?v=cQ3Q9M" type="text/css">

  
  
  
</head>
<body>
  
<section data-bs-version="5.1" class="menu menu1 cid-tJGsCG1vVL" once="menu" id="menu01-1">
	<nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
		<div class="container">
			<div class="navbar-brand">
				<span class="navbar-logo">
					<img src="assets/images/gemini-generated-image-j9ga48j9ga48j9ga.png" alt="Mobirise Website Builder" style="height: 3rem;">
				</span>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<div class="hamburger">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
					<?php
						echo '<li class="nav-item">
							<a class="nav-link link text-primary display-4" href="home.php#form02-0">تواصل معي</a>
						</li>';
						echo '<li class="nav-item">
							<a class="nav-link link text-primary display-4" href="home.php#header16-0">الصفحة الرئيسية</a>
						</li>';
echo '<li class="nav-item">
    <a class="nav-link link text-primary display-4" href="logout.php">تسجيل الخروج</a>
</li>';
?>

				</ul>
				<div class="navbar-buttons mbr-section-btn">
					<a class="btn btn-primary display-4" href="home.php#header16-0">رجوع</a>
				</div>
			</div>
		</div>
	</nav>
</section>


<section data-bs-version="5.1" class="header16 cid-tJGs7X2OSn" id="header16-0">
  

  
  

  <div class="text-center container">
    <div class="row justify-content-center mb-4">
      <div class="col-12 col-lg-12">
        <div class="image-wrap">
          <img src="assets/images/view-ancient-egyptian-civilization-culture.jpeg" alt="Mobirise Website Builder">
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-12 col-lg-9">
        <h1 class="mbr-section-title mbr-fonts-style mt-4 display-1"><strong>تراث مصر الفرعوني</strong></h1>
        <p class="mbr-text mbr-fonts-style mt-4 display-4"><strong>رحلة عبر أزمنة المجد المصري</strong></p>
        
      </div>
    </div>
  </div>
</section>

<section data-bs-version="5.1" class="features4 cid-tJGEoKGifq" id="features04-3">
	
	
	<div class="container">
		<div class="mbr-section-head mb-5">
			<h4 class="mbr-section-title mbr-fonts-style align-left mb-3 display-1"><strong>حضارات مصر الفرعونية</strong></h4>
			
			
		</div>
		<div class="row">
			<div class="item features-image col-12 col-md-6 col-lg-4">
				<div class="item-wrapper">
					<div class="item-img">
						<img src="assets/images/beautiful-egypt-landscape-digital-art-2.jpeg" alt="Mobirise Website Builder">
					</div>
					<div class="item-content">
						<h5 class="item-title mbr-fonts-style display-5"><strong>الحضارة المصرية القديمة</strong></h5>
						
						<p class="mbr-text mbr-fonts-style display-7">
							تُعتبر أقدم الحضارات في مصر، وتبدأ مع توحيد مملكتي مصر العليا والسفلى على يد الملك نارمر. شهدت هذه المرحلة بناء الأهرامات الأولى في مصر
						</p>
						<div class="mbr-section-btn item-footer"><a href="page1.php#article04-6" class="btn item-btn btn-primary display-7">اعرف المزيد</a></div>
					</div>

				</div>
			</div>
			<div class="item features-image col-12 col-md-6 col-lg-4">
				<div class="item-wrapper">
					<div class="item-img">
						<img src="assets/images/old-historical-abu-simbel-temple-ramesses-ii-egypt.jpeg" alt="Mobirise Website Builder">
					</div>
					<div class="item-content">
						<h5 class="item-title mbr-fonts-style display-5"><strong>الحضارة القديمة الوسطى</strong></h5>
						
						<p class="mbr-text mbr-fonts-style display-7">
							شهدت هذه الفترة استقرارًا سياسيًا وثقافيًا ملحوظًا. اشتهرت ببناء المعابد الكبرى مثل معبد الملكة حتشبسوت في الدير البحري ومعابد الكرنك في الأقصر
						</p>
						<div class="mbr-section-btn item-footer"><a href="page2.php#article04-a" class="btn item-btn btn-primary display-7">اعرف المزيد</a></div>
					</div>
				</div>
			</div>
			<div class="item features-image col-12 col-md-6 col-lg-4">
				<div class="item-wrapper">
					<div class="item-img">
						<img src="assets/images/egyptian-hieroglyphs-wall.jpeg" alt="Mobirise Website Builder">
					</div>
					<div class="item-content">
						<h5 class="item-title mbr-fonts-style display-5"><strong>الحضارة الحديثة</strong></h5>
						
						<p class="mbr-text mbr-fonts-style display-7">
							تُعرف أيضًا بالعصر الذهبي للملك تحتمس الثالث ورمسيس الثاني، حيث شهدت تطورًا عسكريًا واقتصاديًا وثقافيًا كبيرًا. تم بناء العديد من المعابد والمقابر الفخمة مثل مقبرة توت عنخ آمون ومدينة طيبة<br>
						</p>
						<div class="mbr-section-btn item-footer"><a href="page3.php#article04-f" class="btn item-btn btn-primary display-7">اعرف المزيد</a></div>
					</div>
				</div>
			</div>
			
			
			
		</div>
	</div>
</section>

<section data-bs-version="5.1" class="features4 cid-tJGKiS9ad3" id="features04-5">
	
	
	<div class="container">
		<div class="mbr-section-head mb-5">
			
			<h5 class="mbr-section-subtitle mbr-fonts-style align-left mb-3 display-1">اشهر معالم مصر الفرعونية</h5>
			
		</div>
		<div class="row">
			
			<div class="item features-image col-12 col-md-6 col-lg-4 active">
				<div class="item-wrapper">
					<div class="item-img">
						<img src="assets/images/pyramid-giza.jpeg" alt="Mobirise Website Builder" data-slide-to="0" data-bs-slide-to="0">
					</div>
					<div class="item-content">
						<h5 class="item-title mbr-fonts-style display-5"><strong>أهرامات الجيزة</strong></h5>
						
						<p class="mbr-text mbr-fonts-style display-7">
							تتألف من أهرامات خوفو، خفرع، ومنقرع، وهي أشهر المعالم الأثرية في مصر وأعظم إنجازات الحضارة الفرعونية.
						</p>
						<div class="mbr-section-btn item-footer"><a href="page4.php#article08-l" class="btn item-btn btn-secondary display-7">اعرف المزيد</a></div>
					</div>
				</div>
			</div><div class="item features-image col-12 col-md-6 col-lg-4">
				<div class="item-wrapper">
					<div class="item-img">
						<img src="assets/images/ancient-egyptian-culture-civilization-from-6.jpeg" alt="Mobirise Website Builder" data-slide-to="1" data-bs-slide-to="1">
					</div>
					<div class="item-content">
						<h5 class="item-title mbr-fonts-style display-5"><strong>تمثال أبو الهول</strong></h5>
						
						<p class="mbr-text mbr-fonts-style display-7">رمز مهم وأحد أكثر المعالم شهرة في العالم، يمثل جسد أسد برأس فرعون في الجيزة.<br></p>
						<div class="mbr-section-btn item-footer"><a href="page5.php#article08-n" class="btn item-btn btn-secondary display-7">اعرف المزيد</a></div>
					</div>

				</div>
			</div>
			<div class="item features-image col-12 col-md-6 col-lg-4">
				<div class="item-wrapper">
					<div class="item-img">
						<img src="assets/images/closeup-shot-luxor-temple-egypt.jpg" alt="Mobirise Website Builder" data-slide-to="1" data-bs-slide-to="1">
					</div>
					<div class="item-content">
						<h5 class="item-title mbr-fonts-style display-5"><strong>معبد الكرنك</strong></h5>
						
						<p class="mbr-text mbr-fonts-style display-7">
							أحد أعظم المعابد في مصر القديمة ويقع في مدينة الأقصر، ويُعتبر تحفة معمارية تضم عددًا كبيرًا من الأعمدة والنقوش<br>
						</p>
						<div class="mbr-section-btn item-footer"><a href="page6.php#article08-r" class="btn item-btn btn-secondary display-7">اعرف المزيد</a></div>
					</div>
				</div>
			</div>
			<div class="item features-image col-12 col-md-6 col-lg-4">
				<div class="item-wrapper">
					<div class="item-img">
						<img src="assets/images/closeup-shot-luxor-temple-egypt-712x473.jpg" alt="Mobirise Website Builder" data-slide-to="3" data-bs-slide-to="3">
					</div>
					<div class="item-content">
						<h5 class="item-title mbr-fonts-style display-5"><strong>وادي الملوك</strong></h5>
						
						<p class="mbr-text mbr-fonts-style display-7">مقبرة ملوك الدولة الحديثة، ويضم مقابر رمسيس الثاني وتوت عنخ آمون وغيرها من الملوك.<br>
						</p>
						<div class="mbr-section-btn item-footer"><a href="page7.php#article08-v" class="btn item-btn btn-secondary display-7">اعرف المزيد</a></div>
					</div>
				</div>
			</div><div class="item features-image col-12 col-md-6 col-lg-4">
				<div class="item-wrapper">
					<div class="item-img">
						<img src="assets/images/pngegg-712x401.png" alt="Mobirise Website Builder" data-slide-to="4" data-bs-slide-to="4">
					</div>
					<div class="item-content">
						<h5 class="item-title mbr-fonts-style display-5"><strong>معبد حتشبسوت</strong></h5>
						
						<p class="mbr-text mbr-fonts-style display-7">معلم معماري فريد مخصص للملكة حتشبسوت، ويعد واحدًا من أبرز المعابد في تاريخ مصر.<br>
						</p>
						<div class="mbr-section-btn item-footer"><a href="page8.php#article08-z" class="btn item-btn btn-secondary display-7">اعرف المزيد</a></div>
					</div>
				</div>
			</div>
			
			<div class="item features-image col-12 col-md-6 col-lg-4">
				<div class="item-wrapper">
					<div class="item-img">
						<img src="assets/images/view-ancient-temple-tomb-from-ancient-egyptian-times-712x862.jpg" alt="Mobirise Website Builder" data-slide-to="4" data-bs-slide-to="4">
					</div>
					<div class="item-content">
						<h5 class="item-title mbr-fonts-style display-5"><strong>مقبرة توت عنخ آمون</strong></h5>
						
						<p class="mbr-text mbr-fonts-style display-7">واحدة من أشهر الاكتشافات الأثرية، حيث تم العثور على كنوز فريدة داخل مقبرة توت عنخ آمون، مما جعلها واحدة من أكثر الآثار شهرة في العالم.<br>
						</p>
						<div class="mbr-section-btn item-footer"><a href="page9.php#article08-z" class="btn item-btn btn-secondary display-7">اعرف المزيد</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section data-bs-version="5.1" class="people3 cid-tJGQCkAyg1" id="people03-7">
	
	
	<div class="container">
		<div class="mbr-section-head mb-4">
			<h4 class="mbr-section-title mbr-fonts-style align-center mb-3 display-1"><strong>الثلاثي الفرعوني</strong></h4>
			
		</div>
		<div class="row">
			
			<div class="item features-image col-12 col-md-6 col-lg-4 active">
				<div class="item-wrapper">
					<div class="item-img mb-3">
						<img src="assets/images/queen-hatshepsut-egypt-tours-portal-1-712x518.png" alt="Mobirise Website Builder" title="" data-slide-to="0" data-bs-slide-to="0">
					</div>
					<div class="item-content align-left">
						
						<h6 class="item-subtitle mbr-fonts-style mb-3 display-5"><strong>الملك</strong></h6>
						<p class="mbr-text mbr-fonts-style mt-3 display-7">هو الحاكم الأعلى وصاحب السلطة المطلقة في الدولة الفرعونية، وكان مسؤولاً عن إدارة شؤون البلاد، الدينية، السياسية، والعسكرية.<br></p>
					</div>
					<div class="mbr-section-btn item-footer mt-2"><a href="page10.php#article04-1b" class="btn item-btn btn-black display-7">اعرف المزيد</a></div>
				</div>
			</div><div class="item features-image col-12 col-md-6 col-lg-4">
				<div class="item-wrapper">
					<div class="item-img mb-3">
						<img src="assets/images/ramses-ii-british-museum-712x1068.jpeg" alt="Mobirise Website Builder" title="" data-slide-to="1" data-bs-slide-to="1">
					</div>
					<div class="item-content align-left">
						
						<h6 class="item-subtitle mbr-fonts-style mb-3 display-5"><strong>الوزير</strong></h6>
						<p class="mbr-text mbr-fonts-style mt-3 display-7">كان يشغل منصبًا مهمًا في تنظيم شؤون الدولة، من حيث الإدارة الاقتصادية والإدارية، وكان يعاون الملك في تنفيذ سياساته.<br></p>
					</div>
					<div class="mbr-section-btn item-footer mt-2"><a href="page11.php#article04-1d" class="btn item-btn btn-black display-7">اعرف المزيد</a></div>
				</div>
			</div><div class="item features-image col-12 col-md-6 col-lg-4">
				<div class="item-wrapper">
					<div class="item-img mb-3">
						<img src="assets/images/sheik-el-beled-500x667.jpeg" alt="Mobirise Website Builder" title="" data-slide-to="2" data-bs-slide-to="2">
					</div>
					<div class="item-content align-left">
						
						<h6 class="item-subtitle mbr-fonts-style mb-3 display-5"><strong>الكاهن</strong></h6>
						<p class="mbr-text mbr-fonts-style mt-3 display-7">كان الكهنة يلعبون دورًا دينيًا هامًا في النظام الفرعوني، حيث كانوا مسؤولين عن أداء الطقوس الدينية وحفظ المعابد وإدارة الشؤون الروحية للبلاد.<br>
						</p>
					</div>
					<div class="mbr-section-btn item-footer mt-2"><a href="page12.php#article04-1h" class="btn item-btn btn-black display-7">اعرف المزيد</a></div>
				</div>
			</div>
			
		</div>
	</div>
</section>

<section data-bs-version="5.1" class="form5 cid-tL70TtsETn" id="form02-0">
    
    
    <div class="container">
        <div class="mbr-section-head mb-5">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>إذا لديك اي مشكلة تواصل معي</strong></h3>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form  method="POST" class="mbr-form form-with-styler" data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true" value="h8g/mGhSlhVBDjJFywrxGBApGW1kqZdVZtPLFTJUeUXpmTci8fiSks/UHKxzdxkbt/ORyvAgJrTiSd4JLwAIifTjs/CDVEtZLk+AT2Cz4Fwu/bjDWmCSoTmYh8lDsjnb">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">تم إرسال الرسالة لي و سيتم الرد في اسرع وقت</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                            Oops...! some problem!
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-md col-sm-12 form-group mb-3" data-for="name">
                            <input type="text" name="name" placeholder="الإسم" data-form-field="name" class="form-control" value="" id="name-form02-0">
                        </div>
                        <div class="col-md col-sm-12 form-group mb-3" data-for="email">
                            <input type="email" name="email" placeholder="الإيميل" data-form-field="email" class="form-control" value="" id="email-form02-0">
                        </div>
                        <div class="col-12 form-group mb-3" data-for="phone">
                            <input type="tel" name="phone" placeholder="رقم الهاتف" data-form-field="phone" class="form-control" value="" id="phone-form02-0">
                        </div>
                        <div class="col-12 form-group mb-3" data-for="textarea">
                            <textarea name="textarea" placeholder="أكتب رسالتك هنا" data-form-field="textarea" class="form-control" id="textarea-form02-0"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn"><button type="submit" class="btn btn-warning display-7">إرسل الأن</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="list1 cid-tJGRlgYbKj" id="list01-8">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12 col-lg-10 m-auto">
                <div class="content">
                    <div class="mbr-section-head align-left mb-5">
                        <h3 class="mbr-section-title mb-2 mbr-fonts-style display-2"><strong>أسئلة ؟</strong></h3>
                    </div>
                    <div id="bootstrap-accordion_6" class="accordion" role="tablist" aria-multiselectable="true">
                        <!-- السؤال الأول -->
                        <div class="card mb-3">
                            <div class="card-header" role="tab" id="headingOne">
                                <a role="button" class="panel-title" data-bs-toggle="collapse" href="#collapse1_6" aria-expanded="true" aria-controls="collapse1_6">
                                    <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-5">ما هو اللغز وراء استخدام المصريين القدماء للون الأزرق في الأزياء والتماثيل؟</h6>
                                    <span class="sign mbr-iconfont mobi-mbri-arrow-down"></span>
                                </a>
                            </div>
                            <div id="collapse1_6" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne" data-bs-parent="#bootstrap-accordion_6">
                                <div class="panel-body">
                                    <p class="mbr-fonts-style panel-text display-7">المصريون القدماء استخدموا اللون الأزرق لأنه رمز للحياة والأبدية، وكان مرتبطًا بالنيل والألوهية.</p>
                                </div>
                            </div>
                        </div>
                        <!-- السؤال الثاني -->
                        <div class="card mb-3">
                            <div class="card-header" role="tab" id="headingTwo">
                                <a role="button" class="panel-title" data-bs-toggle="collapse" href="#collapse2_6" aria-expanded="true" aria-controls="collapse2_6">
                                    <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-5">هل كان الفراعنة يغيرون أسماءهم بعد وفاة فرعون آخر؟</h6>
                                    <span class="sign mbr-iconfont mobi-mbri-arrow-down"></span>
                                </a>
                            </div>
                            <div id="collapse2_6" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingTwo" data-bs-parent="#bootstrap-accordion_6">
                                <div class="panel-body">
                                    <p class="mbr-fonts-style panel-text display-7">نعم، لتأكيد شرعية حكمهم أو إبراز علاقتهم بآلهة معينة.</p>
                                </div>
                            </div>
                        </div>
                        <!-- السؤال الثالث -->
                        <div class="card mb-3">
                            <div class="card-header" role="tab" id="headingThree">
                                <a role="button" class="panel-title" data-bs-toggle="collapse" href="#collapse3_6" aria-expanded="true" aria-controls="collapse3_6">
                                    <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-5">ما هو سبب اكتشاف بعض التوابيت الخالية من الجثث؟</h6>
                                    <span class="sign mbr-iconfont mobi-mbri-arrow-down"></span>
                                </a>
                            </div>
                            <div id="collapse3_6" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingThree" data-bs-parent="#bootstrap-accordion_6">
                                <div class="panel-body">
                                    <p class="mbr-fonts-style panel-text display-7">بسبب السرقات التي حدثت عبر التاريخ ونهب الكنوز الموجودة بها.</p>
                                </div>
                            </div>
                        </div>
                        <!-- السؤال الرابع -->
                        <div class="card mb-3">
                            <div class="card-header" role="tab" id="headingFour">
                                <a role="button" class="panel-title" data-bs-toggle="collapse" href="#collapse4_6" aria-expanded="true" aria-controls="collapse4_6">
                                    <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-5">هل كانت الفراعنة يأكلون الحلوى؟</h6>
                                    <span class="sign mbr-iconfont mobi-mbri-arrow-down"></span>
                                </a>
                            </div>
                            <div id="collapse4_6" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingFour" data-bs-parent="#bootstrap-accordion_6">
                                <div class="panel-body">
                                    <p class="mbr-fonts-style panel-text display-7">نعم، كانوا يأكلون الحلوى المصنوعة من العسل والفواكه المجففة.</p>
                                </div>
                            </div>
                        </div>
                        <!-- السؤال الخامس -->
                        <div class="card mb-3">
                            <div class="card-header" role="tab" id="headingFive">
                                <a role="button" class="panel-title" data-bs-toggle="collapse" href="#collapse5_6" aria-expanded="true" aria-controls="collapse5_6">
                                    <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-5">لماذا كان يُعتبر الكبش رمزًا مقدسًا في مصر الفرعونية؟</h6>
                                    <span class="sign mbr-iconfont mobi-mbri-arrow-down"></span>
                                </a>
                            </div>
                            <div id="collapse5_6" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingFive" data-bs-parent="#bootstrap-accordion_6">
                                <div class="panel-body">
                                    <p class="mbr-fonts-style panel-text display-7">الكبش كان رمزًا للإله آمون ويرتبط بالقوة والبقاء.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="footer3 programm5 cid-tL7oDZlVRK" once="footers" id="footer03-3">

        

    

    <div class="container">
        <div class="row">

            

            <div class="col-12">
                <div class="social-row">
                    <div class="soc-item">
                        <a href="https://www.facebook.com/profile.php?id=100061167523651" target="_blank">
                            <span class="mbr-iconfont display-7 socicon-facebook socicon"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://wa.me/201024485693">
                            <span class="mbr-iconfont socicon-whatsapp socicon"></span>
                        </a>
                    </div>
                    
                    
                    
                </div>
            </div>
            <div class="col-12 mt-5">
                <p class="mbr-fonts-style copyright display-7"><strong>
                    هذا العمل صمم لمسابقة المبدع الصغير @2024</strong></p>
            </div>
        </div>
    </div>  
  
  <input name="animation" type="hidden">
  </body>
</html>