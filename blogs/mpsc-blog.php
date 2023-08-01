<?php 
$Title="MPSC blogs";
$Link="https://www.dompsc.com/blogs/mpsc-blog.php";
$Thumbnail="https://www.dompsc.com/blogs/mpsc-blog.webp";
$Description="Read information about MPSC exams and the interesting blogs about MPSC in the marathi";
 $date=date("d-F-Y");
 ?>
<!DOCTYPE html >
<html lang="en">
<head>
  <title><?php echo("$Title"); ?></title>
<!--Tags start -->
<meta name="description" content="<?php echo("$Description"); ?>"/>
<link rel="canonical" href="<?php echo("$Link") ?>">

<!--Tags End -->
<!-- twitter-card-start-->
<meta name="twitter:card" content="summary_large_image">
<meta name=”twitter:site” content=”@dompsc”>
<meta name=”twitter:creator” content=”@Mpscdo”>
<meta name="twitter:title" content="<?php echo("$Title"); ?>">
<meta name="twitter:description" content="<?php echo("$Description"); ?>">
<meta name="twitter:image" content="<?php echo("$Thumbnail"); ?>">
<!-- twitter-card-end-->
<!--OpenGraph-Start-->
<meta property="og:title" content="<?php echo("$Title"); ?>">
<meta property="og:site_name" content="dompsc">
<meta property="og:url" content="<?php echo("$Link") ?>">
<meta property="og:description" content="<?php echo("$Description"); ?>">
<meta property="og:type" content="article">
<meta property="og:image" content="<?php echo("$Thumbnail"); ?>">
<!--OpenGraph-End-->
<!--schema Tagging Organization start   -->

<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "url": "https://www.dompsc.com/",
      "logo": "https://www.dompsc.com/dompscfavicon.ico"
    }
</script>
<!--schema Tagging Organization End -->
<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "Webpage",
  "name" : "<?php echo("$Title"); ?>",
   "url" : "<?php echo("$Link") ?>"
}
</script>
<!--schema breadcrumb start -->
<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "dompsc",
    "item": "https://www.dompsc.com/"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "Blogs",
    "item": "https://www.dompsc.com/Blogs/"  
  }]
}
</script>
<!--schema breadcrumb end -->
<!--json article-start-->
<script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "NewsArticle",
  "mainEntityOfPage": {
        "@type": "WebPage",
        "@id":"<?php echo("$Thumbnail"); ?>"
      },

  "headline": "<?php echo("$Title"); ?>",
  "datePublished": "<?php echo "$date"; ?>",
  "dateModified": "29-11-2020T09:20:00+08:00",
  "description":"<?php echo("$Description"); ?>",
  "image": {
    "@type": "ImageObject",
    "height": "400",
    "width": "197",
    "url": "<?php echo("$Thumbnail"); ?>"
  },
  "author": "dompsc",
  "publisher": {
    "@type": "Organization",
    "logo": {
      "@type": "ImageObject",
      "url": "https://www.dompsc.com/dompscfavicon.ico"
    },
    "name": "dompsc"
  },
  "articleBody":"<?php echo("$Title"); ?>"
}
</script>
<!--json article-End-->





<!--all linking start -->
<?php include('../style.php'); ?>
<!--all linking start End-->
<!-- Animation Start-->
<style type="text/css">
  b.csschange:before{
    content:"#Rights";
    animation:animate infinite 6s;
  }
  @keyframes animate {
    0% {
      content:"वाचावे";
    }
    25% {
      content:"चिंतन करावे";
    }
    50% {
      content:"अनुभवावे";
    }
    75% {
      content:"श्रदधावे";
    }
    100% {
      content:"प्रगल्भ व्हावे";
    }
  }
</style>
<!-- Animation end-->

 
              <!--page started -->
    <div class="container-fluid marathi">      
<!--bannerUpperHorizontal -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Upperhorizontal -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5831518225061639"
     data-ad-slot="4444694270"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<!--bannerUpperHorizontal end--><br>

   <!--topics start -->
      <div class="Container row text-center marathi" style="margin-top:-40px;">
        <div class="col-lg-6 "><h1 class="display-4" style="margin-top:90px;">MPSC Blog</h1>
          <span style="font-size:3.4rem;">#माणसाने नेहमी <b class="csschange" style="color:#786fff! important;"></b></span>
        </div>
      <div  class="col-lg-6" style="text-align:center;"><img src="<?php echo("$Thumbnail"); ?>" alt="MPSC Blogs" class="img-fluid" loading="lazy"></div>
        
      </div>
     <div class="row">
    <div class="col-lg-8">
        <div class="card card-border-color">             
            <div class="card-body marathi">  
              <!--Main Div September-->
              <fieldset class='border' style="width:auto!important;" id="September">
                <legend class='badge badge-dompsc'>Read Important MPSC Exams Blogs </legend>
               <?php  
                              
                  mysqli_set_charset( $conn, 'utf8');
                  $result = mysqli_query($conn,"SELECT * FROM Current_Affairs WHERE Type='Blogs'  ORDER BY Date DESC ");
                  while($row = mysqli_fetch_array($result))
                  {
                 echo " <ul style='list-style-type:none;'>
                         <h3><a href=".$row['Link']." target='_Blank'><li>➤ ".$row['Title']."</li></a><h3>                
                          </ul>
                            "; 
                          }                      
                        ?>
               </fieldset> 
          <!--Main Div  September-->   
          <p></p> 
           
              <br id="Intro">
                 
               
<!--ImageInfeed end-->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="-6t+ed+2i-1n-4w"
     data-ad-client="ca-pub-5831518225061639"
     data-ad-slot="8141246760"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<!--ImageInfeed end-->
                        
                        
 <!--ArticleAdd -->
 
<div class="table table-responsive">
   <div class="text-center">
    <br>
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <ins class="adsbygoogle"
     style="display:block;"
     data-ad-layout="in-article"
     data-ad-format="fluid"
     data-ad-client="ca-pub-5831518225061639"
     data-ad-slot="5865587159"></ins>
    <script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<br>
</div>
</div>
<!--ArticleAdd end-->
                    
                     <!--ImageInfeed end-->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="-6t+ed+2i-1n-4w"
     data-ad-client="ca-pub-5831518225061639"
     data-ad-slot="8141246760"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<!--ImageInfeed end-->                        
               </div>
        </div>
<!--Mpsc Pre 2019 ENd -->

</div>
<!--col-lg-8 end -->

<!--col-lg-4 start -->

<?php include('mpsc-blog-col-4.php'); ?>
   <!--col-lg-4 end -->
</div><!--Row end -->
  </div>
       <!--container ended Ended -->      

<!--Footer start -->
<?php include('../footer.php'); ?>
<!--footer End -->


</div>
<!-- Page Content End div -->
 <div class="overlay"></div>

</body>
</html>