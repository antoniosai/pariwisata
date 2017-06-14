@extends('layouts.frontend.layout')

@section('title')
Gallery
@endsection

@section('content')
<div class="container">
    <h2>Our Location</h2>
    <hr>    
    <div class="row">
        <div class="col-md-9">
        	<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>
    	  </div>
    	
      	<div class="col-md-3">
    		<h2>Hotel ABCD</h2>
    		<address>
    			<strong>Pamengpeuk, Garut</strong><br>
    			Jl. Pamengpeuk No. 15<br>
    			Pamengpeuk<br>
    			44182<br>
    			<abbr title="Phone">P:</abbr> 01234 567 890
    		</address>
    	</div>
    </div><!-- End col 2 -->
</div>
@endsection