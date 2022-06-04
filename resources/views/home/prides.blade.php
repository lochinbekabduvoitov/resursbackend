<section class="faxrimiz" id="faxrimiz">  
    
    <div class="title">
     <div class="title-icon"></div>
     <div class="section-title">Bizning faxrimiz</div>
   </div>
     <div class="content">
       <div class="swiper mySwiper">
         <div class="swiper-wrapper">
           @foreach($pridedata as $data)
           <div class="swiper-slide card">
             <img style="background-image:url(/Prideimages/{{$data->image}}); background-size:cover;   background-repeat:  no-repeat;" alt="">
          <div class="card-body " style="height:30%">
           <h5 class="card-title">{{$data->name}}</h5>
           <p class="card-text">{{$data->description}} </p>
          </div>
           </div>
           @endforeach

         </div>
       </div>
       <div class="icon-main-box  swiper-button-next">
         <div class="icon-box">
           <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
             <path d="M1 9H17" stroke="#2D2D2D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
             <path d="M9 1L17 9L9 17" stroke="#2D2D2D" stroke-width="2" stroke-linecap="round"
               stroke-linejoin="round" />
           </svg>
         </div>
       </div> 

       <div class="icon-main-box  swiper-button-prev">
         <div class="icon-box">
           <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
             <path d="M17 9H0.999999" stroke="#2D2D2D" stroke-width="2" stroke-linecap="round"
             stroke-linejoin="round" />
             <path d="M9 1L1 9L9 17" stroke="#2D2D2D" stroke-width="2" stroke-linecap="round"
             stroke-linejoin="round" />
           </svg>
         </div>
       </div>
     </div>
      
       
  
    
     </section>