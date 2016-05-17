<br/><br/><br/>
<div class="col-md-4 col-md-offset-1">
  <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
    <div class="btn-group " role="group">
      <button type="button" id="stars" class="btn btn-coklat klik" href="#tab1" data-toggle="tab">
        <div class="sidebar-font" style="font-family: Dosis;" data-autohide="false">TERPOPULER</div>
      </button>
    </div>

    <div class="btn-group " role="group">
      <button type="button" id="favorites" class="btn btn-default klik" href="#tab2" data-toggle="tab">
      <div class="sidebar-font" style="font-family: Dosis;" data-autohide="false">TERBARU</div>
      </button>
    </div>
  </div>

  <div class="well">
    <div class="tab-content">
      <div class="tab-pane fade in active" id="tab1">
          @foreach($terpopuler as $populer)
          <div class="row">
          <div class="col-xs-4">

            <img class="img-responsive thumbnail" src="{{asset($populer->image)}}"></img>
          </div>
            <div class="col-xs-7">
              <span style="font-family:'Helvetica';"><a href="{{$populer->url}}">{{$populer->title}}</a></span>
            </div>
            </div>
          @endforeach

        
          
      </div>
    <div class="tab-pane fade in" id="tab2">
       @foreach($terbaru as $baru)
          <div class="row">
          <div class="col-xs-4">

            <img class="img-responsive thumbnail" src="{{asset($baru->image)}}"></img>
          </div>
            <div class="col-xs-7">
              <span style="font-family:'Helvetica';"><a href="{{$baru->url}}">{{$baru->title}}</a></span>
            </div>
            </div>
          @endforeach       
      
      </div>
    </div>
  </div>
    </div>