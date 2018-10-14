<?php
/**
 * フロントページテンプレート
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package simple_lp
 */

// カスタマイザ設定取得
$opts = get_theme_mod('simple_lp_theme_options');
$startdate = new DateTime($opts['start_date']);
$enddate = new DateTime($opts['start_date']);
$enddate->modify('+'. $opts['duration_minutes'] .' minutes');

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="top-image">
				<img width="750" height="1200" alt="" src="<?php echo get_template_directory_uri(); ?>/images/top.png">
				<div class="lead">
					<p><strong><?php echo $startdate->format('n.j'); ?></strong><?php echo strtoupper($startdate->format('D')); ?></p>
					<p>初心者から上級者まで集まる</p>
					<p>イラストレーター交流会</p>
				</div>
			</section><!-- .top-image -->
			<section class="news">
				<div class="paper">
					<header class="ribbon">
						<div class="text ruby">
							<div class="rt">NEWS</div>
							<h2 class="rb">お知らせ</h2>
						</div>
					</header>
					<p class="title"><?php echo $opts['past_count']; ?></p>
					<p class="date">次回開催<?php echo $startdate->format('n月j日'); ?>(<?php echo $wp_locale->get_weekday_abbrev($wp_locale->get_weekday($startdate->format('w'))); ?>)</p>
					<p class="time"><?php echo $startdate->format('H:i'); ?>〜<?php echo $enddate->format('H:i'); ?></p>
					<div class="btn-wrap">
						<a class="btn btn-link" href="<?php echo $opts['contact_url']; ?>">お申込みはこちら</a>
					</div>
					<div class="gauge">
						<div id="seat-bar" style="right: <?php echo ((1 - $opts['seat_remain'] / $opts['seat_limit']) * 100); ?>%"></div>
						<p class="count"><strong><?php echo $opts['seat_remain']; ?>/<?php echo $opts['seat_limit']; ?></strong>人</p>
					</div>
					
				</div>
			</section><!-- .news -->
			<section class="about-us">
				<div class="tri top-left"></div>
				<header class="ruby">
					<div class="rt">ABOUT US</div>
					<h2 class="rb">「いらばこ」とは</h2>
				</header>
				<div class="paper">
					<p>「いらばこ」とは、「イラストの詰まった箱」という意味です。様々な個性を持ったイラストレーターさんが集まり、<span class="marker yellow">それぞれの感性が輝ける場にしたい</span>という思いから「いらばこ」という名前になりました。</p>
					<p>イラストレーターさんに特化した交流会はまだまだ少ないのが現状です。
					そこで、イラストレーターさんが安心して話せる場を提供したいと思い、いらばこを発足しました。
					皆さんにとって「いらばこ」が、少しでも前に進むためのきっかけになればこれほど嬉しいことはありません。</p>
					<p>どうぞよろしくお願いします！</p>
				</div>
				<div class="crystal">
					<div class="pink">
						<img alt="" width="94" height="86" src="<?php echo get_template_directory_uri(); ?>/images/crystal_pink.png">
					</div>
					<div class="blue">
						<img alt="" width="83" height="73" src="<?php echo get_template_directory_uri(); ?>/images/crystal_blue.png">
					</div>
				</div>
				<div class="tri right-bottom"></div>
			</section><!-- .about-us -->
			<section class="benefits">
				<h2>こんな方に<strong>オススメ！</strong></h2>
				<div class="paper">
					<ul class="list-check">
						<li>プロの話を聞いてみたい</li>
						<li>イラストレーターになりたいが、まず何をするべきか分からない</li>
						<li>他の人はどうやって活動しているのか気になる</li>
						<li>周りにイラストを描いている仲間がいない</li>
						<li>独学で描いていて、今のやり方で合っているのか分からない</li>
						<li>とにかく現状を何とかしたい！</li>
					</ul>
				</div>
			</section><!-- .benefits -->
			<section class="irabako-contents">
				<header class="ribbon">
					<div class="text ruby">
						<div class="rt">CONTENTS</div>
						<h2 class="rb">交流会の内容</h2>
					</div>
				</header>
				<div class="paper">
					<div class="head-wrap">
						<h3 class="marker yellow">プロのイラストレーターに相談</h3>
					</div>
					<div class="text">
						<p>ゲーム業界や広告業界など、実際に現場で活動しているイラストレーターの話を対面で聞くことができます。
						当日の雰囲気はアットホームでわいわいした空間ですので、「絵を描きたい！」という気持ちさえあればプロ・アマチュア問わず気軽にご参加頂けるイベントです。
						絵を描き始めたばかりの初心者の方も是非お越しください！</p>
					</div>
				</div>
				<div class="paper">
					<div class="head-wrap">
						<h3 class="marker yellow">イラストレーターの悩みを共有</h3>
					</div>
					<div class="text">
						<p>「イラストレーターになりたいけど、どうやって仕事を取ればいいのか分からない…」「仕事は取れるようになってきたけど、将来のことを考えると不安…」「上手い人と比べて落ち込んでしまう…」そんなイラストレーターならではのお悩みを相談してみませんか？一人で抱え込んでいることも、皆で共有することで色々な解決方法が見えてきます。</p>
					</div>
				</div>
				<div class="paper">
					<div class="head-wrap">
						<h3 class="marker yellow">同じ志の仲間との情報交換</h3>
					</div>
					<div class="text">
						<p>「皆の練習方法が知りたい」
						「デッサンのし方は？」
						「魅力的なキャラクターを描く方法は？」
						「ソフトや画材は何を使ってるの？」絵を描いていると次から次へと疑問が湧いてきますよね。交流会にはアニメ風のイラストからリアル調、シンプルなイラストなど幅広い作風の方が参加されるため、自分では思いつかない練習方法や、最新の情報を取り入れることが出来ます。</p>
					</div>
				</div>
			</section><!-- .irabako-contents -->
			<section class="member">
				<header class="ribbon">
					<div class="text ruby">
						<div class="rt">MEMBER</div>
						<h2 class="rb">運営紹介</h2>
					</div>
				</header>
				<div class="profile">
					<div class="image">
						<div class="pink">
							<img alt="" width="94" height="86" src="<?php echo get_template_directory_uri(); ?>/images/crystal_pink.png">
						</div>
						<div class="shot">
						<img alt="bibico" width="300" height="300" src="<?php echo get_template_directory_uri(); ?>/images/icon-bibico.png">
						</div>
						<div class="blue">
							<img alt="" width="83" height="73" src="<?php echo get_template_directory_uri(); ?>/images/crystal_blue.png">
						</div>
					</div>
					<div class="name ruby">
						<div class="rt">びびこ</div>
						<h2 class="rb marker yellow">bibico</h2>
					</div>
					<div class="paper">
						<p>ゲーム会社社員からフリーランスのイラストレーターへ転身。<br>
						「富士山コスプレ世界大会」キャラクターデザイン・ポスター・グッズ制作、「パルミーオンラインイラスト講座」キャラクターデザイン講座の講師を務める。<br>
						その他、ゲームイラストやwebイラストを制作。都内でイラストレーター交流会「いらばこ」の主宰として、ワークショップや交流会の開催など、イラストレーター支援を行なっている。</p>
					</div>
				</div><!-- .profile -->
				<div class="profile">
					<div class="image">
						<div class="pink">
							<img alt="" width="94" height="86" src="<?php echo get_template_directory_uri(); ?>/images/crystal_pink.png">
						</div>
						<div class="shot">
							<img alt="マスノナツキ" width="300" height="300" src="<?php echo get_template_directory_uri(); ?>/images/icon-bibico.png">
						</div>
						<div class="blue">
							<img alt="" width="83" height="73" src="<?php echo get_template_directory_uri(); ?>/images/crystal_blue.png">
						</div>
					</div>
					<div class="name ruby">
						<div class="rt">ますの&nbsp;なつき</div>
						<h2 class="rb marker yellow">マスノナツキ</h2>
					</div>
					<div class="paper">
						<p>接客販売業を経てフリーランスイラストレーターへ。前職では色彩知識社内講師を担当。「パルミーオンラインイラスト講座」コピック色塗り講座講師・パーソナルカラー×イラスト彩色セミナー主催・企業イメージイラスト制作などを担当。作品はアナログ制作を主流にしており、優しい滲み感や透明感のある表現を得意とする。</p>
					</div>
				</div><!-- .profile -->
				<div class="profile">
					<div class="image">
						<div class="pink">
							<img alt="" width="94" height="86" src="<?php echo get_template_directory_uri(); ?>/images/crystal_pink.png">
						</div>
						<div class="shot">
							<img alt="谷野文亮" width="300" height="300" src="<?php echo get_template_directory_uri(); ?>/images/icon-bibico.png">
						</div>
						<div class="blue">
							<img alt="" width="83" height="73" src="<?php echo get_template_directory_uri(); ?>/images/crystal_blue.png">
						</div>
					</div>
					<div class="name ruby">
						<div class="rt">やの&nbsp;ふみあき</div>
						<h2 class="rb marker yellow">谷野文亮</h2>
					</div>
					<div class="paper">
						<p>現役漫画家と二人暮らしをするアニメ会社の社長。<br>
						映像の他にも、キャラクターデザインや漫画広告のディレクションも行なっている。<br>
						事業を進めながら、幅広いスキルを生かして、多方面のプロジェクトで技術的なサポートをしている。
					</div>
				</div><!-- .profile -->
			</section><!-- .member -->
			<section class="voices">
				<header class="ribbon">
					<div class="text ruby">
						<div class="rt">VOICES</div>
						<h2 class="rb">参加者様の声</h2>
					</div>
				</header>
				<div class="voice">
					<div class="voice-header">
						<div class="shot">
							<img alt="くろずさん" width="300" height="300" src="<?php echo get_template_directory_uri(); ?>/images/icon-bibico.png">
						</div>
						<div class="profile">
							<div class="job">学生</div>
							<h3 class="name"><span class="marker yellow">くろず<span class="smaller">さん</span></span></h3>
						</div>
					</div>
					<p class="balloon top-left">
						私は美大生なのにデッサンができない、絵が周りと比べて劣っていると感じ悩んでいました。<br>
						いらばこで、他作家さんに沢山のアドバイスとモチベをいただき、絵に対する意識が変わって、今ではお仕事をもらえるようになりました！悩みを共有することで新しい道がひらけると身を以て体験しました。
					</p>
				</div>
			</section><!-- .voices -->
			<section class="faq">
				<header class="ribbon">
					<div class="text ruby">
						<div class="rt">FAQ</div>
						<h2 class="rb">よくあるご質問</h2>
					</div>
				</header>
				<div class="faq-item">
					<p class="question">学生でも参加出来ますか？</p>
					<p class="answer">はい。当交流会は美大生や専門学生の方にも多くご参加頂いております。</p>
				</div>
				<div class="faq-item">
					<p class="question">まだイラストの実績がなくても大丈夫ですか？</p>
					<p class="answer">大丈夫です！どんなイラストが描きたいのか当日ゆっくりとお聞かせください。</p>
				</div>
				<div class="faq-item">
					<p class="question">写真で顔を出したくないのですが...</p>
					<p class="answer">ご安心ください。当日、受付に顔出しNGの旨をお伝え頂ければ、WebやSNS等に掲載されることはございません。</p>
				</div>
				<div class="faq-item">
					<p class="question">友人と一緒に参加しても大丈夫ですか？</p>
					<p class="answer">お友達とのご参加も歓迎しております。是非ご一緒にお越しください。</p>
				</div>
				<div class="faq-item">
					<p class="question">あまり人と話すのが得意ではないのですが...</p>
					<p class="answer">当交流会には人見知りの方も多くいらっしゃいますが、皆様終わる頃には笑顔で帰られています。どうぞご安心ください！</p>
				</div>
			</section><!-- .qanda -->
			<section class="past">
				<header class="ribbon">
					<div class="text ruby">
						<div class="rt">PASTEVENT</div>
						<h2 class="rb">開催実績</h2>
					</div>
				</header>
				<div class="paper">
					<p><?php echo nl2br($opts['past_event']); ?></p>
				</div>
			</section><!-- .past -->
			<section class="overview">
				<div class="tri top-left"></div>
				<header class="ribbon">
					<div class="text ruby">
						<div class="rt">OVERVIEW</div>
						<h2 class="rb">イベント概要</h2>
					</div>
				</header>
				<div class="paper">
					<section>
						<h3><span class="marker yellow">日時</span></h3>
						<p class="date"><?php echo $startdate->format('Y.n.j'); ?></p>
						<p class="time"><?php echo $startdate->format('H:i'); ?>&nbsp;〜&nbsp;<?php echo $enddate->format('H:i'); ?></p>
					</section>
					<section>
						<h3><span class="marker yellow">開催場所</span></h3>
						<p>
							<a href="http://mirai-lab.org/" target="_blank">みらい研究所<small><i class="fas fa-external-link-alt"></i></small></a><br>
							<small>〒101-0051<br>
							東京都千代田区神田神保町1-6 神保町サンビルディング 3F</small>
						</p>
						<div class="map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6480.441823473638!2d139.759358!3d35.696181!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe5c7ea0795d1bfd3!2z44G_44KJ44GE44GR44KT77yIQ28gTGVhcm5pbmcgU3BhY2XjgIzjgb_jgonjgYTnoJTnqbbmiYDjgI3vvIk!5e0!3m2!1sja!2sjp!4v1538889407258" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</section>
					<section>
						<h3><span class="marker yellow">参加費</span></h3>
						<p>2,500円</p>
					</section>
					<section>
						<h3><span class="marker yellow">持ち物</span></h3>
						<ul>
							<li>ポートフォリオ</li>
							<li>名刺</li>
						</ul>
					</section>
					<section>
						<h3><span class="marker yellow">タイムテーブル</span></h3>
						<ul class="timetable">
							<?php
								$items = explode("\n", $opts['time_table']);
								for($i = 0, $len = count($items); $i < $len; $i++):
								?>
									<li><?php echo preg_replace('/^(.+) +/s', '${1}&nbsp;&nbsp;', $items[$i]); ?></li>
								<?php
								endfor;
							?>
						</ul>
						<small>※当日状況により前後する可能性がございます</small>
					</section>
				</div>
			</section><!-- .overview -->
		</main><!-- #main -->
	</div><!-- #primary -->

	<div id="fix-btn" style="opacity: 0; visibility: hidden;">
		<a class="btn btn-link" href="<?php echo $opts['contact_url']; ?>"><img alt="" class="akane-sd" src="<?php echo get_template_directory_uri(); ?>/images/akane-sd.png" width="167" height="292">お申込みはこちら</a>
	</div><!-- #fix-btn -->

<?php
get_footer();
