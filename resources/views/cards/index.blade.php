@extends('cards.layout')

@section('content')
	<div class="jumbotron jumbotron-fluid" style="color:white; background-color: #135072; margin-bottom:0px;">
		<div class="container">
			<h1 class="display-2">尋找信用卡 - 精選推薦</h1>
			<p class="lead">Money101.com.tw 精選推薦生活各面向中，可以給您最好回饋的信用卡，立刻就來比較現金回饋、旅遊禮遇、購物折扣中，最符合您消費習慣的信用卡吧！</p>
			<p><a class="btn btn-raised btn-warning btn-lg" href="#" role="button">挑選信用卡</a></p>
		</div>
	</div>


	<div class="jumbotron jumbotron-fluid" style="color:white; background-color: #77aa43;">
		<div class="container">
			<div class="row">
			    <div class="col-lg-12">
				    <div class="card card-block">
				  	    <div class="input-group ">
			    			<button type="button" class="btn btn-lg btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			   		        篩選工具
			        		</button>
			        		<div class="dropdown-menu">
				          		<a class="dropdown-item" href="#">Action</a>
				        	</div>

				      		<input type="text" class="form-control" aria-label="Text input with dropdown button">
				      		<div class="input-group-btn">
						        <button type="button" class="btn btn-lg btn-secondary">
						        	<i class="material-icons">search</i>
					        	</button>
						        <button type="button" class="btn btn-lg btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						        	<span class="sr-only">Toggle Dropdown</span>
						        </button>
						        <div class="dropdown-menu dropdown-menu-right">
						          <a class="dropdown-item" href="#">Action</a>
						          <a class="dropdown-item" href="#">Another action</a>
						          <a class="dropdown-item" href="#">Something else here</a>
						          <div role="separator" class="dropdown-divider"></div>
						          <a class="dropdown-item" href="#">Separated link</a>
						        </div>
					        </div>
				    	</div>
				  	</div>
				</div>
			</div>
		</div>
	</div>
@stop