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
        @foreach($resursmaindata as $data)
        <div class="row">
        <div class="col-md-4">
          
            <div data-aos="fade-up"
            data-aos-duration="2000"> 
              <div class="card-resurs">
                <img  style="top: 0; left: 0;  border-radius: 1rem;    width: 100%;  height: 20rem;  margin:0 1rem" src="/ResursMainimages/{{$data->image}}" alt="">
                <h5 class="resurs-title">{{$data->title}}</h5>
                <p class="resurs-text">{{$data->description}}</p>
                <a href="#">
                  <h2>Batafsil</h2> <img src="./home/fonts/batafsil.png" alt="">
                </a>
              </div>  
</div>
</div>
@endforeach
       </div>
    
        
        
       
    </section>