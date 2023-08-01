<!--Style For Skeleton -->
<style type="text/css">
   #Skeleton{background-color:#e0e0e04d;width:auto;height:auto;border-radius:3px;}
</style>  
<script type="text/javascript">
  window.addEventListener("load", function () {
   document.getElementById('Skeleton').style.backgroundColor ='transparent'; 
 
 });
</script>
<!--Style For Skeleton End-->
<!--col-lg-4 start -->
    <div class="col-lg-4">
      <!--Marathi topics Start -->
         <div class="card card-border-color" id="">
            <div class="card-body ">
             <h2 class="text-center display-6 ">Read All MPSC blogs</h2>
            <div class="marathi">   
            <ul style='list-style-type:none;padding-left:8px;'>           
                <?php                                
                  mysqli_set_charset( $conn, 'utf8');
                $result = mysqli_query($conn,"SELECT * FROM current_affairs WHERE Type='Blogs' ORDER BY Date DESC limit 5");
                  while($row = mysqli_fetch_array($result))
                  {
                 echo " 
                         <li ><h3><a href=".$row['Link']." target='_Blank' style='display:inline-flex;' class='width btn  btn-outline-dompsc add-margin-bottom' >➤ <span style='padding-left:5px;' >".$row['Title']."</span></a></h3></li>               
                         
                            "; 
                          }                       
                 ?>
                  </ul>
                 <h2> <a href="https://www.dompsc.com/blogs/mpsc-blog.php" class="btn btn-dompsc  btn-block" target="_blank"><i class="fa fa-blog"></i> Read More MPSC Blogs</a></h2>     </div>
            </div>
        </div>
      <!--Marathi topics End -->

       <!--ArticleAdd -->
  <div class="table table-responsive">
   <div class="text-center">
    <br>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block; text-align:center;"
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
          <!--Other Subjects -->
           <div class="card card-border-color"> 
            <div class="card-body">
              <p class="text-center col-4-heading">Subjects</p>
            <div class="table-responsive">
                             <table class="table  table-borderless">
                               <tr class="text-center">
                                 <td><span class="reduce-bottom-margin-by-20"><a href="https://www.dompsc.com/Marathi/mpsc-marathi-grammar.php" class="btn btn-dompsc  btn-block "><i class="fa fa-plus marathi"></i>मराठी</a></span></td>
                                 <td><span class="reduce-bottom-margin-by-20"><a href="https://www.dompsc.com/English/index.php" class="btn btn-dompsc  btn-block"><i class="fa fa-font"></i>English</a></span></td>
                               </tr>
                               <tr>
                                 <td><span class="reduce-bottom-margin-by-20"><a href="https://www.dompsc.com/Chemistry/mpsc-chemistry-syllabus.php" class="btn btn-dompsc btn-block"><i class="fa fa-flask"></i>Chemistry</a></span></td>
                                 <td><span class="reduce-bottom-margin-by-20"><a  href="https://www.dompsc.com/Physics/mpsc-physics.php" class="btn btn-dompsc btn-block"><i class="fa fa-bolt"></i>Physics</a></span></td>
                               </tr>
                               <tr>
                                 <td><span class="reduce-bottom-margin-by-20"><a href="https://www.dompsc.com/Environment/mpsc-environment.php" class="btn btn-dompsc btn-block"><i class="fa fa-globe-americas"></i> Environment</a></span></td>
                                 <td><span class="reduce-bottom-margin-by-20"><a  href="https://www.dompsc.com/Economics/mpsc-economics.php" class="btn btn-dompsc btn-block"><i class="fa fa-rupee-sign"></i> Economics</a></span></td>
                               </tr>
                               <tr>
                                 <td><span class="reduce-bottom-margin-by-20"><a href="https://www.dompsc.com/Biology/mpsc-biology-topic.php" class="btn btn-dompsc btn-block"><i class="fa fa-virus"></i> Biology</a></span></td>
                                 <td><span class="reduce-bottom-margin-by-20"><a  href="https://www.dompsc.com/Polity/index.php" class="btn btn-dompsc  btn-block" target="_blank"><i class="fa fa-graduation-cap"></i> Polity</a></span></td>
                               </tr>
                                 <tr>
                                  <td><span class="reduce-bottom-margin-by-20"><a  href="https://www.dompsc.com/History/index.php" class="btn btn-dompsc  btn-block" target="_blank"><i class="fa fa-monument"></i> History</a></span></td>
                                 <td><span class="reduce-bottom-margin-by-20"><a href="https://www.dompsc.com/Geography/index.php" class="btn btn-dompsc  btn-block" target="_blank"><i class="fa fa-road"></i> Geography</a></span></td>                                 
                               </tr>
                               <tr>
                               <td colspan="2"> <span class="reduce-bottom-margin-by-20"><a href="https://www.dompsc.com/mpsc-current-affairs.php" class="btn btn-dompsc  btn-block" target="_blank"><i class="fa fa-crosshairs"></i> Current Affairs</a></span></td>                   
                               </tr>
                             </table>
                           </div>
                         </div>
                         </div>
        <!--subject End-->
        <!-- Add responsive-->
<div class="card">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- VerticalResponsive -->
            <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-5831518225061639"
             data-ad-slot="2897010280"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
    </div>     
<!-- Add Responsive End-->
        <p></p>
      <!--Imp links start-->
            <div class="card card-border-color" id="Links">
            <div class="card-body line-height-min">
             <p class="text-center col-4-heading ">MPSC Previous Papers</p>
             <div class="table-responsive">
                  <table class="table  table-borderless">
               <tr class="text-center">                
                <td><span class="reduce-bottom-margin-by-20"><a href="../Mpsc/MPSC-pre-syllabus.php" target="_Blank" class="btn btn-dompsc  btn-block">MPSC  Preliminary  Syllabus  </a></span></td>
                <td><span class="reduce-bottom-margin-by-20"><a href="../PSISTIASO/STIPSIASOpresyllabus.php" target="_Blank" class="btn btn-dompsc  btn-block">Combine Pre Syllabus </a></span></td>
                </tr>
                    <tr class="text-center">
                <td><span class="reduce-bottom-margin-by-20"><a href="../Mpsc/Mpsc-pre-papers.php" rel="noreferrer" target="_Blank" class="btn btn-dompsc  btn-block">Download Mpsc Pre Papers</a></span></td>
                <td><span class="reduce-bottom-margin-by-20"><a href="../Mpsc/MpscMainsPapers.php" rel="noreferrer" target="_Blank" class="btn btn-dompsc  btn-block">Download MPSC Mains Papers</a></span></td>
              </tr>
              <tr class="text-center">               
                <td> <span class="reduce-bottom-margin-by-20"><a href="../PSISTIASO/STIPSIASOPrePapers.php" rel="noreferrer" target="_Blank" class="btn btn-dompsc  btn-block">Download Combine Pre Papers</a></span></td>
                <td><span class="reduce-bottom-margin-by-20"><a href="https://www.dompsc.com/PSISTIASO/MPSC-STI-Mains-Papers.php" rel="noreferrer" target="_Blank" class="btn btn-dompsc  btn-block">Download STI Mains Papers</a></span></td>              
                
              </tr>
              <tr class="text-center">
                <td><span class="reduce-bottom-margin-by-20"><a href="https://www.dompsc.com/PSISTIASO/MPSC-PSI-Mains-Papers.php" rel="noreferrer" target="_Blank" class="btn btn-dompsc  btn-block">Download PSI Mains Papers</a></span></td>
                <td><span class="reduce-bottom-margin-by-20"><a href="https://www.dompsc.com/PSISTIASO/MPSC-ASO-Mains-Papers.php" rel="noreferrer" target="_Blank" class="btn btn-dompsc  btn-block">Download ASO Mains Papers</a></span></td>
                
             </tr>
           </table>
            </div>
        </div>
      </div>
        <p></p>
        <!--Imp links End-->
<!--Matched  content Add start -->
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5831518225061639"
     crossorigin="anonymous"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="autorelaxed"
     data-ad-client="ca-pub-5831518225061639"
      data-matched-content-ui-type="image_card_sidebyside"
     data-matched-content-rows-num="4"
     data-matched-content-columns-num="2"
     data-ad-slot="9801041937"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<!--Matched  content Add end -->

         <!--pustake start -->
      <div class="card card-border-color" id="Books">
            <div class="card-body ">
             <p class="text-center col-4-heading ">MPSC Books pdf</p>
             <div class="col-sm-12">               
                  <span><a href="https://www.dompsc.com/Download.php" class="btn btn-dompsc  btn-block" > <i class="fa fa-download"></i> Download</a></span>              
              </div>
            </div>
        </div>
        <!--pustake End-->

    </div><!--col-lg-4 end -->