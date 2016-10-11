@extends('cards.layout')

@section('content')
	<div class="jumbotron jumbotron-fluid" style="color:white; background-color: #135072; padding-bottom: 0rem;padding-top: 8rem;">
		<div class="container">
			<div class="row">
			    <div class="col-lg-3">
				</div>
				<div class="col-lg-9">
					<h1 class="display-2">全家便利商店</h1>
					<p class="lead">第 {{$id}} 家商店，以下是有關此商店的優惠</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
		    <div class="col-lg-3">
				<div class="card" style="margin-top:-200px;">
					<img class="card-img-top" style="width: 100%; display: block;" src="https://scontent.ftpe6-1.fna.fbcdn.net/v/t1.0-9/10169217_10154146963404258_7992117182987392096_n.jpg?oh=35cea49950e4c9e129e3cd74e1a5bdab&oe=58AC9102" data-holder-rendered="true">
					<div class="card-block">
						<h4 class="card-title">Card title</h4>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
			<div class="col-lg-9">
				<div class="card">
				    <div class="card-block">
				    	<h4 class="card-title">台新銀行</h4>
				    	<p class="card-text">
				    		<p>
				    			<span class="tag tag-pill tag-primary">活動名稱</span>
				    			2016/Q3~Q4全家便利商店
				    		</p>
							<p>
								<span class="tag tag-pill tag-primary">活動期間</span>
								2016/07/01~2016/12/31
							</p>
							<p>
								<span class="tag tag-pill tag-primary">活動內容</span>
								活動期間內，於全家便利商店內刷台新信用卡達指定金額，可享下列優惠
							</p>
							<p>
								<span class="tag tag-pill tag-primary">優惠說明</span>
								於全家便利商店刷台新信用卡滿額享下列優惠
								(亦適用潔衣家及繳水電瓦斯、電信費、學費等生活帳單)

								•【週六刷台新】
								2016/9/1~12/31每週六單筆刷NT$100，送NT$10刷卡金；Fish悠遊聯名卡送NT$20刷卡金(需登錄，活動期間每戶每週六限擇優回饋乙次)
								•【享4期0利率】
								單筆刷NT$1,000，可申請4期0利率

								***以上各活動僅限刷台新信用卡，各活動皆須登錄，如活動期間遇單日多重活動，則各活動採擇優各回饋乙次
							</p>
				    	</p>
				    	<a href="https://www.taishinbank.com.tw/TS/TS02/TS0201/TS020103/TS02010306/TS02010306-SEC?id=116f0ae4-149a-46c8-a205-098a0d9133ba" class="btn btn-raised btn-primary" target="_blank">去看看</a>
				    </div>
				</div>
				<div class="card">
				    <div class="card-block">
				    	<h4 class="card-title">凱基銀行 MoneyBack悠遊聯名御璽卡</h4>
				    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    	<a href="#" class="btn btn-primary">Go somewhere</a>
				    </div>
				</div>
				<div class="card">
				    <div class="card-block">
				    	<h4 class="card-title">國泰世華 PLAY悠遊聯名卡</h4>
				    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    	<a href="#" class="btn btn-primary">Go somewhere</a>
				    </div>
				</div>
			</div>
		</div>
	</div>
@stop