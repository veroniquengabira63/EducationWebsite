

<?php include 'common/header.php'; ?>
  <!-- Body  -->
<style>
    h1#title {
       text-transform: capitalize;
    font-size: 25px;
    letter-spacing: 1px;
    border: 1px solid;

}
</style>
  <!-- Mobile filter  -->
  <div class="d-block d-md-none" id="mob-fil" onclick="openfp('fp-filter')">
    <i class="fa fa-filter mob-fil" aria-hidden="true"></i>
  </div>

  <!-- Full page filter  -->
  <div class="full-page d-md-none" id="fp-filter">
    <div class="fp-container">

      <div class="bg-green fil-top">
        <div class="row">
          <h4 class="mt-2">FILTER</h4>
          <button class="btn btn-default" onclick="closefp('fp-filter')">X</button>
        </div>
      </div>
      
      <div class="row fil">
        
        <div class="col-4">
            <nav class="nav flex-column">
              <a class="nav-link active" href="#id-1" data-toggle="tab">STREAM</a>
              <a class="nav-link" href="#id-2" data-toggle="tab">COURSE</a>
              <a class="nav-link" href="#id-3" data-toggle="tab">STATE</a>
              <a class="nav-link" href="#id-4" data-toggle="tab">PROGRAM TYPE</a>
              <a class="nav-link" href="#id-5" data-toggle="tab">COLLEGE TYPE</a>
              <a class="nav-link" href="#id-6" data-toggle="tab">AVERAGE FEES</a>
            </nav>
        </div>

        <div class="col-8" style="border-left: 1px solid black; padding-top: 2px;">
          <div class="tab-content">

            <div class="tab-pane active" id="id-1">
              <div class="filter">
                <h5>STREAM</h5>
                
                <div class="filter-sec">
                  <ul class="list-unstyled">

        <?php $cnt = count($streams->result_array()); ?>
        <?php if ($cnt > 0) : ?>
        <?php foreach ($streams->result_array() as $stream): ?>
          <?php $get_stream = explode(',' , $stream['course_degrees']); ?>
          <?php for ($i=0; $i <count($get_stream) ; $i++) { ?> 
            <?php $stream_data[] = $get_stream[$i]; 
            

            ?>
            <?php } ?>
            <?php endforeach ?>
            <?php foreach (get_streams($stream_data) as $mystream): ?>

                    <li>
                      <input type="checkbox" class="checkbox-circle common_seleter streams" id="stream_mob<?php echo $mystream['id'] ?>" data-country="<?php echo $this->uri->segment(1) ?>" data-archieve="stream" data-sid="<?php echo $mystream['id'] ?>" data-url="<?php echo url_title($mystream['degree_name'], 'dash', true); ?>" name="" value="<?php echo $mystream['id'] ?>">
                      <label for="stream_mob<?php echo $mystream['id'] ?>"><?php echo $mystream['degree_name'].'('.countData($mystream['id'] , 'course_degrees' , $arpage).')'; ?></label>
                    </li>
            <?php endforeach ?>
           <?php else: ?>
            <p>No filter</p>
          <?php endif; ?>        
                 
                  </ul>
                </div>
              </div>
            </div>
    
            <div class="tab-pane fade" id="id-2">
              <div class="filter">
                <h5>Course</h5>
                
                <div class="filter-sec">
                  <ul class="list-unstyled">

        <?php $cnt = count($courses->result_array()); ?>
       <?php if ($cnt > 0) : ?>
        <?php foreach ($courses->result_array() as $course): ?>
          <?php $get_course = explode(',' , $course['courses']); ?>
          <?php for ($i=0; $i <count($get_course) ; $i++) { ?> 
            <?php $course_data[] = $get_course[$i]; 
            

            ?>
          <?php } ?>
          <?php endforeach ?>
          <?php foreach (get_courses($course_data) as $mycourse): ?>

                    <li>
                      <input type="checkbox" class="checkbox-circle common_seleter courses" id="course_mob<?php echo $mycourse['id'] ?>" data-archieve="course" data-country="<?php echo $this->uri->segment(1) ?>" data-sid="<?php echo $mycourse['id'] ?>" class="common_seleter courses" data-url="<?php echo url_title($mycourse['course_name'], 'dash', true); ?>" name="" value="<?php echo $mycourse['id'] ?>">
                      <label for="course_mob<?php echo $mycourse['id'] ?>"><?php echo $mycourse['course_name'].'('.countData($mycourse['id'] , 'courses' , $arpage).')'; ?></label>
                    </li>
            <?php endforeach ?>
           <?php else: ?>
            <p>No filter</p>
          <?php endif; ?>        
                   
                  </ul>
                </div>
              </div>
            </div> 

            <div class="tab-pane fade" id="id-3">
              <div class="filter">
                <h5>States</h5>
                
                <div class="filter-sec">
                  <ul class="list-unstyled">
        <?php $cnt = count($states->result_array()); ?>
        <?php if ($cnt > 0) : ?>

          <?php foreach ($states->result_array() as $state): ?>
            
              <?php 
              
              $state_id[] = $state['states']; 
              
              ?>
          <?php endforeach ?>
          <?php foreach (get_filter_state($state_id) as $mystate): ?>
                    <li>
                      <input type="checkbox" class="checkbox-circle common_seleter states" id="state_mob<?php echo $mystate['id'] ?>" data-country="<?php echo $this->uri->segment(1) ?>" data-archieve="state" data-sid="<?php echo $mystate['id'] ?>" data-url="<?php echo url_title($mystate['name'], 'dash', true); ?>" name="" value="<?php echo $mystate['id'] ?>">
                      <label for="state_mob<?php echo $mystate['id'] ?>"><?php echo $mystate['name'].'('.countData($mystate['id'] , 'states' , $arpage).')'; ?></label>
                    </li>
                    <?php endforeach; ?> 
            <?php else: ?>
              <p>No filter</p>
            <?php endif; ?>
                    
                  </ul>
                </div>
              </div>
            </div>      

            

          </div>
        </div>
        
      </div>

      <div class="row text-center bg-green fixed-bottom fil-bot py-1">
        <div class="col-6" style="border-right: 1px solid white;">
          <h5>
            <button class="btn btn-default p-0" style="position: relative; font-weight: 400;">Clear all</button>
          </h5>
        </div>
        <div class="col-6">
          <h5>
            <button class="btn btn-default p-0" onclick="closefp('fp-filter')" style="position: relative; font-weight: 400;">Apply now</button>
          </h5>
        </div>
      </div>

    </div>
  </div>


  
  <div id="main">
      <div class="container my-5">
          <h1 id="title" class="txt-green text-center"> <?php if (isset($title)) { echo $title ; }else{echo "All Colleges"; } ?></h1>
      </div>


      <!-- Main Content  -->
      <div class="container-fluid exam">
        <div class="row px-4">

          <div class="col-md-3 d-none d-md-block">
            <div class="bg-white side-sec" >
              
              <div class="filter">
                <h5 onclick="filter('stream')">STREAM <i class="fa fa-angle-up stream-up" aria-hidden="true"></i> <i class="fa fa-angle-down stream-down" aria-hidden="true"></i> </h5>
                
                <div class="filter-sec stream">
                  <ul class="list-unstyled">

                  <?php $cnt = count($streams->result_array()); ?>
        <?php if ($cnt > 0) : ?>
        <?php foreach ($streams->result_array() as $stream): ?>
          <?php $get_stream = explode(',' , $stream['course_degrees']); ?>
          <?php for ($i=0; $i <count($get_stream) ; $i++) { ?> 
            <?php $stream_data[] = $get_stream[$i]; 
            

            ?>
            <?php } ?>
            <?php endforeach ?>
            <?php foreach (get_streams($stream_data) as $mystream): ?>

                    <li>
                      <input type="checkbox" class="checkbox-circle common_seleter streams" id="stream_<?php echo $mystream['id'] ?>" data-country="<?php echo $this->uri->segment(1) ?>" data-archieve="stream" data-sid="<?php echo $mystream['id'] ?>" data-url="<?php echo url_title($mystream['degree_name'], 'dash', true); ?>" name="" value="<?php echo $mystream['id'] ?>">
                      <label for="stream_<?php echo $mystream['id'] ?>"><?php echo $mystream['degree_name'].'('.countData($mystream['id'] , 'course_degrees' , $arpage).')'; ?></label>
                    </li>
            <?php endforeach ?>
           <?php else: ?>
            <p>No filter</p>
          <?php endif; ?>    
                    
                  </ul>
                </div>
              </div>

              <div class="filter">
                <h5 onclick="filter('degree')">Course<i class="fa fa-angle-up degree-up" aria-hidden="true"></i> <i class="fa fa-angle-down degree-down" aria-hidden="true"></i> </h5>
                
                <div class="filter-sec degree">
                  <ul class="list-unstyled">
                    <?php $cnt = count($courses->result_array()); ?>
       <?php if ($cnt > 0) : ?>
        <?php foreach ($courses->result_array() as $course): ?>
          <?php $get_course = explode(',' , $course['courses']); ?>
          <?php for ($i=0; $i <count($get_course) ; $i++) { ?> 
            <?php $course_data[] = $get_course[$i]; 
            

            ?>
          <?php } ?>
          <?php endforeach ?>
          <?php foreach (get_courses($course_data) as $mycourse): ?>

                    <li>
                      <input type="checkbox" class="checkbox-circle common_seleter courses" id="course_<?php echo $mycourse['id'] ?>" data-archieve="course" data-country="<?php echo $this->uri->segment(1) ?>" data-sid="<?php echo $mycourse['id'] ?>" class="common_seleter courses" data-url="<?php echo url_title($mycourse['course_name'], 'dash', true); ?>" name="" value="<?php echo $mycourse['id'] ?>">
                      <label for="course_<?php echo $mycourse['id'] ?>"><?php echo $mycourse['course_name'].'('.countData($mycourse['id'] , 'courses' , $arpage).')'; ?></label>
                    </li>
            <?php endforeach ?>
           <?php else: ?>
            <p>No filter</p>
          <?php endif; ?>    
                    
                  </ul>
                </div>
              </div>

              <div class="filter">
                <h5  onclick="filter('state')">State
                  <i class="fa fa-angle-up state-up" aria-hidden="true"></i> 
                  <i class="fa fa-angle-down state-down" aria-hidden="true"></i> 
                </h5>

                <div class="filter-sec state">
                  <ul class="list-unstyled">
                   <?php $cnt = count($states->result_array()); ?>
        <?php if ($cnt > 0) : ?>

          <?php foreach ($states->result_array() as $state): ?>
            
              <?php 
              
              $state_id[] = $state['states']; 
              
              ?>
          <?php endforeach ?>
          <?php foreach (get_filter_state($state_id) as $mystate): ?>
                    <li>
                      <input type="checkbox" class="checkbox-circle common_seleter states" id="state_<?php echo $mystate['id'] ?>" data-country="<?php echo $this->uri->segment(1) ?>" data-archieve="state" data-sid="<?php echo $mystate['id'] ?>" data-url="<?php echo url_title($mystate['name'], 'dash', true); ?>" name="" value="<?php echo $mystate['id'] ?>">
                      <label for="state_<?php echo $mystate['id'] ?>"><?php echo $mystate['name'].'('.countData($mystate['id'] , 'states' , $arpage).')'; ?></label>
                    </li>
                    <?php endforeach; ?> 
            <?php else: ?>
              <p>No filter</p>
            <?php endif; ?>
                   
                  </ul>
                </div>
              </div>

             

             

              

            </div>
          </div>

          <div class="col-md-9 sticky-body" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
            
            <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;"><div class="all-course-right">
              <div align-item="center" id="pagination_link"></div>
              
              <div class="row p-2 filter_data">

               

              </div>
            </div>

          </div>

        </div>
      </div>
      
  </div>
  </div>
<?php include 'common/footer.php'; ?>
<script type="text/javascript">
    function openfp(id){
    document.querySelector('#'+id).classList.add('full-page-open');
    document.querySelector('body').style.overflow='hidden';
}

function closefp(id){
    $('.filter_data').append("<div class='loading'>Loading&#8230;</div>");
    setTimeout(function() {
    $('.loading').hide();
}, 3000);
    document.querySelector('#'+id).classList.remove('full-page-open');
    document.querySelector('body').style.overflow='auto';
} 
  $('#applymodal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) 
  var recipient = button.data('college') 
  var img = button.data('img') 
  var modal = $(this)
  modal.find('.modal-title').html('<div class="col-1"><img width="80" height="80" class=" rounded-circle" src="'+ img +'"></div><div class="col-11"> Register Now To Apply <br><sub>' + recipient+'</sub></div>  ')
  
})
  $('#applynowform input').on('focus' , function(){
    
  
    if($(this).is(':focus')){
     $(this ).parent('div').find('label').css('top' , '-14px');
    }
    else {
     $(this ).parent('div').find('label').css('top' , '5px');
    }

  
  })
  $('#applynowform input').on('focusout' , function(){
    
  
    if($(this).val() == ''){
     $(this ).parent('div').find('label').css('top' , '5px');
    }
    else {
     $(this ).parent('div').find('label').css('top' , '-14px');
    }

  
  })
</script>
 <script type="text/javascript">
 function filter(id){
    document.querySelector('.'+id).classList.toggle('no-dis');
    $("."+id+"-down").toggle();
    $("."+id+"-up").toggle();
}

/// some script
$(function () {
    'use strict'

  $("[data-trigger]").on("click", function(){
        var trigger_id =  $(this).attr('data-trigger');
        $(trigger_id).toggleClass("show");
        $('body').toggleClass("offcanvas-active");
    });

    // close if press ESC button 
    $(document).on('keydown', function(event) {
        if(event.keyCode === 27) {
           $(".navbar-collapse").removeClass("show");
           $("body").removeClass("overlay-active");
        }
    });

    // close button 
    $(".btn-close").click(function(e){
        $(".navbar-collapse").removeClass("show");
        $("body").removeClass("offcanvas-active");
    }); 
 
$(document).ready(function(){

  $("#search_cities").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#list_cities div").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

  $("#search_streams").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#list_streams div").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

});

})
</script>

<script type="text/javascript">
  $(document).ready(function () {

  	$('input.courses').on('change', function() {
    $('input.courses').not(this).prop('checked', false);  
});
  	$('input.streams').on('change', function() {
    $('input.streams').not(this).prop('checked', false);  
});

    var url = document.location.href;
    var splt_url = url.split('/');
    $('.filter-sec').find('input[data-url='+splt_url[6]+']').filter(
     function(){
           $(this).prop('checked' , true);
           var dataid = $(this).attr('data-sid');
           var dataurl = $(this).attr('data-url');
           var datarch = $(this).attr('data-archieve');
           var datacountry = $(this).attr('data-country');
           history.pushState(null, '', '<?= base_url() ?>'+datacountry+'/'+dataid+'/'+datarch+'/'+dataurl+'')

     });
    
    
    filter_data(1);
    function filter_data(page) {
      
      $('.filter_data').html("<div class='loading'>Loading&#8230;</div>");
      var action = 'fetch_data';
      var archive = '<?php echo $archive; ?>';
      var arpage = '<?php echo $arpage; ?>';
      <?php if($id == ' '): ?>
      var id = null;
      <?php else: ?>
      var id = <?php echo $id; ?>;
    <?php endif ; ?>
      var streams = get_filter('streams');
      var courses = get_filter('courses');
      var cities = get_filter('cities');
      var countries = get_filter('countries');
      var states = get_filter('states');
      var college_types = get_filter('college_types');

      $.ajax({
        url : '<?php echo base_url() ?>home/fetch_data/'+page,
        method: 'POST',
        dataType: 'JSON',
        data : { archive:archive , arpage:arpage , streams : streams , courses : courses , college_types : college_types , cities : cities , states : states , countries : countries , id : id},
        success: function(data) {
          //alert('hii');
          $('.filter_data').html(data.college_list);
          $('#pagination_link').html(data.pagination_link);
         if($('.filter-sec input').is(':checked')){
            // alert('checked');
          }
          else{

            if(document.location.href == '<?php echo base_url() ?><?php echo $this->uri->segment(1) ?>/all')
            {

            }
            else{
              document.location.href = '<?php echo base_url() ?><?php echo $this->uri->segment(1) ?>/all'
            }
          }
          
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) { 
                    alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                }       
      })
    }
    function get_filter(class_name) {
      var filters = [];
      $('.'+ class_name +':checked').each(function () {
        filters.push($(this).val());
        
      })
      ;
      return filters;
    }

    $(document).on('click' , '.pagination li a' , function(e)
    {
      e.preventDefault();
      var page = $(this).data('ci-pagination-page');
      filter_data(page);

    })

    $('.common_seleter').click(function(){
$(window).scrollTop(0, 0);
    filter_data(1);
    if($(this).is(':checked')){
    var dataid = $(this).attr('data-sid');
           var dataurl = $(this).attr('data-url');
           var datarch = $(this).attr('data-archieve');
           var datacountry = $(this).attr('data-country');
           if(dataid == 'undefined' )
           {

           }else{
    
           history.pushState(null, '', '<?= base_url() ?>'+datacountry+'/'+dataid+'/'+datarch+'/'+dataurl+'')
       }

           dataurl = dataurl.replace('-' , ' ');
           $('#title').html("India's Top Distance Learning Universities Offering "+dataurl);
          
       }
       else
       {
       	$('.filter-sec').find('input').filter(
     function(){
     	if($(this).is(':checked')){
    var dataid = $(this).attr('data-sid');
           var dataurl = $(this).attr('data-url');
           var datarch = $(this).attr('data-archieve');
           var datacountry = $(this).attr('data-country');
           if(dataid == 'undefined' )
           {

           }else{
           history.pushState(null, '', '<?= base_url() ?>'+datacountry+'/'+dataid+'/'+datarch+'/'+dataurl+'')
       }

           dataurl = dataurl.replace('-' , ' ');
           $('#title').html("India's Top Distance Learning Universities Offering "+dataurl);
       }


     })
       }
  })



  })
</script>

 