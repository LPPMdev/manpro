@extends('master2')

@section('css')
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/staff.css')}}">
@endsection

@section('content')
<br/>
<div class="container">
	<div style="text-align:center">
	    <div id="pengumuman" class="row row-centered">
	        <div class="col-xs-6 col-sm-4 col-md-2 col-centered">            
	            <div class="thumbnail">
	                <div class="caption">
	                    <h4>KETUA</h4>
	                    <hr/>
	                    <p class="nama">dr.The Maria Meiwati Widagdo,Ph.D</p>
	                    <p>
	                    	<br/>
	                    	<span class="glyphicon glyphicon-envelope email" aria-hidden="true"> maria_widagdo@staff.ukdw.ac.id</span>
	                    </p>
	                </div>
	                <img src="{{asset('public/images/staff/maria.jpg')}}" alt="...">
	            </div>
	        </div>
	    </div>

	    <div class="row row-centered">
	        <div class="col-xs-6 col-sm-4 col-md-2 col-centered">            
	            <div class="thumbnail">
	                <div class="caption">
	                    <h4>SEKRETARIS</h4>
	                    <hr/>
	                    <p class="nama">Mujiono,SE,MSc</p>
	                    <p>
	                    	<br/>
	                    	<span class="glyphicon glyphicon-envelope email" aria-hidden="true"> mujiono@staff.ukdw.ac.id</span>
	                    </p>
	                </div>
	                <img src="{{asset('public/images/staff/mujiono.jpg')}}" alt="...">
	            </div>
	        </div>

	        <div class="col-xs-6 col-sm-4 col-md-2 col-centered">            
	            <div class="thumbnail">
	                <div class="caption">
	                    <h5>KESEKRETARIATAN</h5>
	                    <hr/>
	                    <p class="nama">Wismatri Scorpika.W</p>
	                    <p>
	                    	<br/>
	                    	<span class="glyphicon glyphicon-envelope email" aria-hidden="true"> ambarharums@gmail.com</span>
	                    </p>
	                </div>
	                <img src="{{asset('public/images/staff/ambar.jpg')}}" alt="...">
	            </div>
	        </div>
	        <div class="col-xs-6 col-sm-4 col-md-2 col-centered">            
	            <div class="thumbnail">
	                <div class="caption">
	                    <h5>BENDAHARA</h5>
	                    <hr/>
	                    <p class="nama">Verida Christy</p>
	                    <p>
	                    	<br/>
	                    	<span class="glyphicon glyphicon-envelope email" aria-hidden="true"> veridac@staff.ukdw.iac.id</span>
	                    </p>
	                </div>
	                <img src="{{asset('public/images/staff/k7.jpg')}}" alt="...">
	            </div>
	        </div>                
	    </div>

	    <div class="row row-centered">
	        <div class="col-xs-6 col-sm-4 col-md-2 col-centered">            
	            <div class="thumbnail">
	                <div class="caption">
	                    <h4>DIVISI PENELITIAN</h4>
	                    <hr/>
	                    <p class="nama">Serli Stiawaty,S.Si</p>
	                    <p>
	                    	<br/>
	                    	<span class="glyphicon glyphicon-envelope email" aria-hidden="true"> serli.stiawaty@staff.ukdw.ac.id</span>
	                    </p>
	                </div>
	                <img src="{{asset('public/images/staff/sherly.jpg')}}" alt="...">
	            </div>
	        </div>		    
	        <div class="col-xs-6 col-sm-4 col-md-2 col-centered">            
	            <div class="thumbnail">
	                <div class="caption">
	                    <h4>DIVISI PENGABDIAN</h4>
	                    <hr/>
	                    <p class="nama">Totok Pramujito,S.Sos</p>
	                    <p>
	                    	<br/>
	                    	<span class="glyphicon glyphicon-envelope email" aria-hidden="true">  totokpramujito@yahoo.com</span>
	                    </p>
	                </div>
	                <img src="{{asset('public/images/staff/totok.jpg')}}" alt="...">
	            </div>
	        </div>

	        <div class="col-xs-6 col-sm-4 col-md-2 col-centered">            
	            <div class="thumbnail">
	                <div class="caption">
	                    <h4>DIVISI KKN</h4>
	                    <hr/>
	                    <p class="nama">Paulus Margono</p>
	                    <p>
	                    	<br/>
	                    	<span class="glyphicon glyphicon-envelope email" aria-hidden="true"> nanok@staff.ukdw.ac.id</span>
	                    </p>
	                </div>
	                <img src="{{asset('public/images/staff/margono.jpg')}}" alt="...">
	            </div>
	        </div>
               
	    </div>	    	  
	</div>  
</div><!-- /.container -->
@endsection