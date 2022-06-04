<section class="resurs" id="resurs">
      <div class="resurs-header">
        <div  class="title-box">
          <div class="title-icon"></div>
          <h5  > Resurslar</h5>
        </div>
        <div class="icon-box" data-aos="fade-left"
        data-aos-anchor="#example-anchor"
        data-aos-offset="500"
        data-aos-duration="500" >
        <a href="{{url('resurspage')}}">   <img src="./home/images/all.png" for="resurs-all" alt=""></a> 
          <a href="{{url('resurspage')}}"><h5 id="resurs-all">Barcha resurslar</h5></a>
        </div>
      </div>
      <div class="content">
        <div class="row">
          @foreach($resursmaindata as $data)
          <div class="">
            <div data-aos="fade-up"
            data-aos-duration="2000"> 
              <div class="card-resurs">
                <img style="background-image:url(/ResursMainimages/{{$data->image}});  alt="">
                <h5 class="resurs-title">{{$data->title}}</h5>
                <p class="resurs-text">{{$data->description}}</p>
                <a href="#">
                  <h2>Batafsil</h2> <img src="./home/fonts/batafsil.png" alt="">
                </a>
              </div>  
            </div>
          </div>
          @endforeach
    
        
        
       
    </section>