<!DOCTYPE html>
<html>
	<head>
		<link href="./css/frame_only.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="./js/jquery-1.11.3.min.js"></script>
		<script src="./js/musicbox.js"></script>
		<meta charset="utf-8" />
		<title>QQ音乐播放器</title>
		<script>
			$.ajax({
				type: "get",
				url: "./php/file.php",
				success: function(data) {
					var datainfo = eval("(" + data + ")");
					console.log(datainfo);
					addli(datainfo);
				}
			});
			function addli(datainfo) {
				$("#myspan").html(datainfo.length);
				for (i = 0; i < datainfo.length; i++) {
					var v_li = document.createElement("li");
					if (i == 0) {
						v_li.className = "play_current";
					} else {
						v_li.className = " ";
					}
					v_li.title = datainfo[i];
					v_li.id = "j" + i;
					v_li.innerHTML = datainfo[i];
					//为li标签设置点击事件
					v_li.onclick = function(){
						if(absn!=null){
							g_topPlayer.mystop()
						}
						var jj = $(".play_current")[0].id;
						if(jj!=undefined){
							$("#"+jj).css('color','#8E8E8E');
							$("#"+jj).removeClass("play_current");
						}
						$(this).addClass("play_current");
						$(this).css('color','#05B600');
						g_topPlayer.play()
					}
					$("#myul").append(v_li);
				}
				//	
			}
			
		</script>
	</head>

	<body>
		<div class="m_player mini_version" id="divplayer" role="application" style="left: 0px;">
			<div class="m_player_dock" id="divsongframe">
				<div class="music_info" id="divsonginfo">
					<a target="contentFrame" class="album_pic" title=""><img src="http://i.gtimg.cn/mediastyle/y/img/cover_mine_130.jpg" alt="" onerror="this.src='http://imgcache.qq.com/mediastyle/y/img/cover_mine_130.jpg'"></a>
					<div class="music_info_main">
						<script type="text/data" class="data"></script>
						<p class="music_name" title="听我想听的歌！"><span>听我想听的歌！</span><a onclick="g_topPlayer.singleFm.open();" href="javascript:;" class="icon_radio">电台</a></p>
						<p class="singer_name" title="QQ音乐">QQ音乐</p>
						<p class="play_date" id="ptime"></p>
						<p class="music_op" style="display:none;"><strong class="btn_like_n" title="暂不提供此歌曲服务" onclick="MUSIC.event.cancelBubble();" name="myfav_" mid=""><span>我喜欢</span></strong><strong class="btn_share_n" title="暂不提供此歌曲服务" onclick="MUSIC.event.cancelBubble();"><span>分享</span></strong>
							<strong class="btn_kge" onmouseover="this.className='btn_kge btn_kge_hover';" onmouseout="this.className='btn_kge';" style="z-index:100;display:none;" id="btnkge"></strong>
						</p>
					</div>
				</div>
				<div class="bar_op">
					<strong title="上一首( [ )" class="prev_bt" onclick="g_topPlayer.prev();"><span>上一首</span></strong>
					<strong title="播放(P)" class="play_bt" id="btnplay" onclick="g_topPlayer.play();"><span>播放</span></strong>
					<strong title="下一首( ] )" class="next_bt" onclick="g_topPlayer.next();"><span>下一首</span></strong>
					<strong title="列表循环" class="cycle_bt" id="btnPlayway" onclick="g_topPlayer.setPlayWay();"><span>列表循环</span></strong>
					<p class="volume" title="音量调节" id="myvolume">
						<span class="volume_icon" id="spanmute" title="点击设为静音(M)"></span>
						<span class="volume_regulate" id="spanvolume">
						<span class="volume_bar" style="width: 0%;" id="spanvolumebar"></span>
						<span class="volume_op" style="left: 0%;" id="spanvolumeop"></span>
						</span>
					</p>
				</div>
				<p class="playbar_cp_select" id="divselect" style="display: none;"><strong title="列表循环" class="cycle_bt" onclick="g_topPlayer.realSetPlayWay(3);"><span>列表循环</span></strong><strong title="顺序播放" class="ordered_bt" onclick="g_topPlayer.realSetPlayWay(2);"><span>顺序播放</span></strong><strong title="随机播放" class="unordered_bt"
					onclick="g_topPlayer.realSetPlayWay(4);"><span>随机播放</span></strong><strong title="单曲循环" class="cycle_single_bt" onclick="g_topPlayer.realSetPlayWay(1);"><span>单曲循环</span></strong></p>
				</p>
				<p class="player_bar">
					<span class="player_bg_bar" id="spanplayer_bgbar"></span>
					<span class="download_bar" id="downloadbar" style="width: 0%;"></span>
					<span class="play_current_bar" style="width: 0%;" id="spanplaybar"></span>
					<span class="progress_op" style="left: 0%;" id="spanprogress_op"></span>
				</p>
				<div class="time_show" style="left:240px;bottom:8px;display:none;">
					<p id="time_show"></p>
					<span class="icon_arrow_foot"><i class="foot_border"></i><i class="foot_arrow"></i></span>
				</div>
			</div>
			<span class="active_tip" id="spanaddtips" style="top:0px;display:none;"></span>
			<span title="展开播放列表" class="open_list" id="spansongnum1"><span id="myspan">0</span></span>
			<span title="显示歌词(L)" class="btn_lyrics_disabled" id="btnlrc">downloadbar(L)</span>
			<button type="button" class="folded_bt" title="点击收起" id="btnfold"><span>点击收起/展开</span></button>
			<!--play list-->
			<div class="play_list_frame" id="divplayframe" style="display: none; opacity: 1;">
				<div class="play_list_title">
					<!-- 单曲FM修改 -->
					<ul id="tab_container" style="width:270px;">
						<li id="playlist_tab" class="current"><a href="javascript:;" title="播放列表">播放列表</a><i></i></li>
						<li id="fm_tab" style="display:none"><a href="javascript:;" title="单曲电台列表">单曲电台列表</a><i></i></li>
					</ul>
					<span id="clear_list" class="clear_list" onclick="g_topPlayer.clearList();">清空列表</span>
					<strong title="收起播放列表" class="close_list" id="btnclose"></strong>
				</div>
				<div class="play_list" id="divlistmain">
					<!--列表为空提示_S-->
					<div class="play_list_point" id="divnulllist" style="display: none;">
						<div>
							<h4>您当前还未添加任何歌曲</h4>
							<p>您可以：</p>
							<p>在<a href="http://y.qq.com/index.html?pgv_ref=qqmusic.y.player" target="contentFrame" title="QQ音乐">首页</a>选择试听我们推荐的歌曲。</p>
							<p>在<a href="/y/static/singer/index/all_hot_1.html?pgv_ref=qqmusic.y.player" target="contentFrame" title="乐库">乐库</a>中查找您想听的歌曲。</p>
						</div>
					</div>
					<!--列表为空提示_E-->
					<div class="play_list_main" id="divplaylist" style="display: block;">
						<!-- 播放列表_S-->
						<div class="single_list" id="divsonglist" dirid="0">
							<ul id="myul">
							</ul>
						</div>
						<div id="divalbumlist" style="display:none;">
						</div>
					</div>
					<div class="play_list_scroll" style="top:0px"><span id="spanbar" class="play_list_scrolling" style="height: 338px;"></span></div>
					<!--单曲电台列表_S-->
				</div>
			</div>
			<!--歌词内容-->
			<div class="y_player_lyrics" id="player_lyrics_pannel" style="display:none;">
				<div class="lyrics_text" id="qrc_ctn"></div>
				<div class="lyrics_bg"></div>
				<span class="close_lyrics" id="closelrcpannel"></span>
			</div>
			<div class="single_radio_tip" id="single_radio_tip" style="display:none;">
				<a href="javascript:;" class="close_tips" title="关闭"></a>
			</div>
		</div>
	</body>

</html>