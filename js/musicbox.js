var analyser;
var starttime = 0;
var bftime = 0;
var isstart = false;
var absn, myBuffer;
var gainnode = null;
window.AudioContext = window.AudioContext || window.webkitAudioContext || window.mozAudioContext;
var AC = new AudioContext();

var voice = 0.5;
var musicname, time, singer; //正在播放
var miao = 0; //得到歌曲秒数
//歌曲进度
var spanplay = 0; 
var spanprogress = -1;
var progress;

var onMouseDown = false;
var g_topPlayer = {
	play: function() {
		if (isstart1()) {
			document.getElementById("btnplay").className = "pause_bt";
			if (bftime == 0) {
				musicBuffer = null;

				musicname = document.getElementsByClassName("play_current")[0].innerHTML;
				$(".play_current").css('color', '#05B600');
				$(".music_op")[0].style.display = "block";
				//设置音量
				document.getElementById("spanvolumebar").style.width = "50%";
				document.getElementById("spanvolumeop").style.left = "50%";
				//获取歌手的名字
				$.ajax({
					type: "get",
					url: "./php/radio.php",
					data: {
						musicname: musicname
					},
					success: function(data) {
						var datainfo = eval("(" + data + ")");
						dealmusic(datainfo);
					}
				});
				//处理音频信息
				function dealmusic(datainfo) {
					musicname = datainfo['title'];
					singer = datainfo['artist'];
					time = datainfo[0]['time'];
					console.log(time);
					a = time.indexOf(':');
					console.log("\n" + a)
					for (i = 0; i < time.length; i++) {
						if (i < a) {
							console.log("\n" + Math.pow(10, a - i - 1));
							console.log("\n" + time.charAt(i));
							t = Math.pow(10, a - i - 1);
							u = time.charAt(i)*1;
							miao += t * u * 60;
							console.log(miao);
						} else if (i > a) {
							o = time.substr(i) * 1;
							miao += o;
							miao *= 10;
							break;
						}
					}
					//设置歌手与音乐名字
					console.log(miao);
					document.getElementsByClassName("music_name")[0].title = "musicname";
					document.getElementsByClassName("music_name")[0].innerHTML = musicname;
					document.getElementsByClassName("singer_name")[0].title = "singer";
					document.getElementsByClassName("singer_name")[0].innerHTML = singer;
					document.getElementById("ptime").innerHTML = time;
					spanplay = 0; 
					spanprogress = -1;
					progress = setInterval(function() {
						if (isstart) {
							spanplay += 1;
							spanprogress += 1;
							if (spanplay <= 100 || spanprogress <= 100) {
								document.getElementById("spanplaybar").style.width = spanplay + "%";
								document.getElementById("spanprogress_op").style.left = spanprogress + "%";
							}else{
								g_topPlayer.next();
							}
						}
					}, miao);
				}

				musicpath = "audio/" + musicname;
				loadSound(musicpath, function() {
					decodeBuffer(musicBuffer)
				})

			} else {
				playMusic(myBuffer, bftime)
			}
		} else {
			//暂停
			document.getElementById("btnplay").className = "play_bt";
			if (absn != null) {
				absn.stop()
			}
			bftime += (new Date() - starttime) / 1000;
			isstart = false;
		}
		//判断是否开始
		function isstart1() {
			if (document.getElementById("btnplay").className == "play_bt") {
				return true;
			} else {
				return false;
			}
		}
		//播放声音 
		function loadSound(url, callback) {

			var xhr = new XMLHttpRequest();
			xhr.open('get', url);
			xhr.responseType = "arraybuffer"
			xhr.onload = function() {
				musicBuffer = xhr.response
				callback()
			};
			xhr.send();
		}
		//文件解码
		function decodeBuffer(arraybuffer) {
			AC.decodeAudioData(arraybuffer, function(buffer) {
				playMusic(buffer)
					//	initAnimation()
			}, function(e) {
				console.log(e)
				alert("文件解码失败233")
			})
		}

		function changeBuffer(file) {
			var fr = new FileReader();
			fr.onload = function(e) {
				var fileResult = e.target.result;
				AC.decodeAudioData(fileResult, function(buffer) {
					playMusic(buffer)
				}, function(e) {
					console.log(e)
					alert("文件解码失败")
				})
			}
			fr.readAsArrayBuffer(file);
		}
		//
		function playMusic(buffer, second) {

			document.getElementById("downloadbar").style.width = "100%";
			absn = AC.createBufferSource();
			analyser = AC.createAnalyser();
			gainnode = AC.createGain();
			gainnode.gain.value = voice;
			console.log(voice);
			absn.connect(analyser);
			absn.connect(gainnode);
			//	absn.connect(AC.destination);
			gainnode.connect(AC.destination);
			absn.buffer = buffer;
			absn.loop = true;
			isstart = true;
			myBuffer = buffer;
			absn.start(0, second || 0);
			starttime = new Date();
		}

		/*document.getElementById("start").onclick = function(){
			if(isstart) return;
			playMusic(myBuffer , bftime)
		}
		
		document.getElementById("stop").onclick = function(){
			if(!isstart) return;
			absn.stop()
			bftime += (new Date()-starttime)/1000;
			isstart = false;
		}*/
	},

	mystop: function() {
		document.getElementById("btnplay").className = "play_bt";
		absn.stop();
		bftime = 0;
		isstart = false;
		absn = "";
		analyser = null;
		starttime = 0;
		myBuffer = null;
	},


	//上一首歌曲
	prev: function() {
		stop1()
		var jj = $(".play_current")[0].id;
		$("#" + jj).css('color', '#8E8E8E');
		$("#" + jj).removeClass("play_current");
		var length = $("#myul li").length;
		var num = jj.substr(1, 1);
		console.log(num + " num");
		console.log(length + " length");
		if (num - 1 < 0) {
			num = length - 1;
		} else {
			--num;
		}
		$("#j" + num).addClass("play_current");
		$("#j" + num).css('color', '#05B600');
		g_topPlayer.play()

		function stop1() {
			miao = 0;
			clearInterval(progress);
			document.getElementById("spanplaybar").style.width = "0%";
			document.getElementById("spanprogress_op").style.left = "0%";
			document.getElementById("btnplay").className = "play_bt";
			absn.stop()
			bftime = 0;
			isstart = false;
			absn = "";
			analyser = null;
			starttime = 0;
			myBuffer = null;
		}
	},

	//下一首歌曲
	next: function() {
		stop1()
		jj = $(".play_current")[0].id;
		$("#" + jj).css('color', '#8E8E8E');
		$("#" + jj).removeClass("play_current");
		var length = $("#myul li").length;
		var num = jj.substr(1, 1);
		++num;
		if (num > length - 1) {
			num = 0;
		}
		$("#j" + num).addClass("play_current");
		$("#j" + num).css('color', '#05B600');
		g_topPlayer.play()

		function stop1() {
			miao = 0;
			clearInterval(progress);
			document.getElementById("spanplaybar").style.width = "0%";
			document.getElementById("spanprogress_op").style.left = "0%";
			document.getElementById("btnplay").className = "play_bt";
			absn.stop()
			bftime = 0;
			isstart = false;
			absn = "";
			analyser = null;
			starttime = 0;
			myBuffer = null;
		}

	},
	//设置循环方式
	setPlayWay: function() {
		document.getElementById("divselect").style.display = "block";
	},

	realSetPlayWay: function(playway) {
		if (playway == 1) {
			document.getElementById("btnPlayway").className = "cycle_single_bt";
			document.getElementById("btnPlayway").title = "单曲循环";
			document.getElementById("divselect").style.display = "none";
		} else if (playway == 2) {
			document.getElementById("btnPlayway").className = "ordered_bt";
			document.getElementById("btnPlayway").title = "顺序循环";
			document.getElementById("divselect").style.display = "none";
		} else if (playway == 3) {
			document.getElementById("btnPlayway").className = "cycle_bt";
			document.getElementById("btnPlayway").title = "列表循环";
			document.getElementById("divselect").style.display = "none";
		} else if (playway == 4) {
			document.getElementById("btnPlayway").className = "unordered_bt";
			document.getElementById("btnPlayway").title = "随机循环";
			document.getElementById("divselect").style.display = "none";
		}
	}
}

window.onload = function() {
	//是否静音
	document.getElementById("spanmute").onclick = function() {
			if (document.getElementById("spanmute").className == "volume_icon") {
				document.getElementById("spanmute").className = "volume_mute";
				document.getElementById("spanmute").title = "点击开启声音(M)";
				gainnode.gain.value = 0;
			} else {
				document.getElementById("spanmute").className = "volume_icon";
				document.getElementById("spanmute").title = "点击设为静音(M)";
				gainnode.gain.value = voice;
			}
		}
		//是否 收起
	document.getElementById("btnfold").onclick = function() {
			if (document.getElementById("btnfold").title == "点击收起") {
				document.getElementById("divplayframe").style.display = "none";
				document.getElementById("divplayer").className = "m_player mini_version m_player_folded m_player_playing";
				document.getElementById("divplayer").style.left = "-540px";
				document.getElementById("player_lyrics_pannel").style.display = "none";
				$("#btnlrc").css('color', '#8E8E8E');
				document.getElementById("btnfold").title = "点击展开";
			} else if (document.getElementById("btnfold").title == "点击展开") {
				document.getElementById("divplayframe").style.display = "none";
				document.getElementById("divplayer").className = "m_player mini_version";
				document.getElementById("divplayer").style.left = "0px";
				document.getElementById("btnfold").title = "点击收起";
			}
		}
		//播放列表的展开/收起
	document.getElementById("spansongnum1").onclick = function() {
			if (document.getElementById("divplayframe").style.display == "none") {
				/*document.getElementById("divplayframe").style.webkitTransform.opacity= "0.3s";
				document.getElementById("divplayframe").style.webkitTransform.ease = "0s";
				document.getElementById("divplayframe").style.transition = "opacity 0.3s ease 0s";*/
				document.getElementById("divplayframe").style.display = "block";

			} else {
				/*document.getElementById("divplayframe").style.webkitTransform.opacity= "";
				document.getElementById("divplayframe").style.webkitTransform.ease = "";
				document.getElementById("divplayframe").style.transition = "opacity 0s ease 0s";*/
				document.getElementById("divplayframe").style.display = "none";
			}
		}
		//直接关闭播放列表
	document.getElementById("btnclose").onclick = function() {
		document.getElementById("divplayframe").style.display = "none";
	}

	//歌词显示
	document.getElementById("btnlrc").onclick = function() {
		if (document.getElementById("player_lyrics_pannel").style.display == "none") {
			document.getElementById("player_lyrics_pannel").style.display = "block";
			$("#btnlrc").css('color', 'green');
		} else {
			document.getElementById("player_lyrics_pannel").style.display = "none";
			$("#btnlrc").css('color', '#8E8E8E');
		}
	}

	//拖动调节音量
	document.getElementById("spanvolume").onmousedown = function() {
		MousePress();
		document.getElementById("spanvolume").onmousemove = function() {
				if (onMouseDown) {
					$(".volume").addClass(" adjust_volume");
					var left = $("#spanvolume").offset().left;
					var width = $("#spanvolume").width();
					console.log(width);
					var x = window.event.clientX;
					x = (x - left) / width;
					x = x.toFixed(2);
					voice = x;
					x = (x / 0.01).toFixed(0);
					x = x + "%";
					gainnode.gain.value = voice;
					document.getElementById("spanvolumebar").style.width = x;
					document.getElementById("spanvolumeop").style.left = x;
				} else {
					return null;
				}
			}
		//点击调整音量
		document.getElementById("spanvolume").onclick = function() {
			$(".volume").addClass(" adjust_volume");
			var left = $("#spanvolume").offset().left;
			var width = $("#spanvolume").width();
			var x = window.event.clientX;
			x = (x - left) / width;
			x = x.toFixed(2);
			voice = x;
			x = (x / 0.01).toFixed(0);
			x = x + "%";
			gainnode.gain.value = voice;
			document.getElementById("spanvolumebar").style.width = x;
			document.getElementById("spanvolumeop").style.left = x;
			$("#myvolume").removeClass("adjust_volume");
		}

		//监听鼠标松开
		document.getElementById("spanvolume").onmouseup = function() {
				$("#myvolume").removeClass("adjust_volume");
				MOuseUp();
				return;
			}
			//监听鼠标移开
		document.getElementById("spanvolume").onmouseleave = function() {
			$("#myvolume").removeClass("adjust_volume");
			MOuseUp();
			return;
		}

		function MousePress() {
			onMouseDown = true;
		}

		function MOuseUp() {
			onMouseDown = false;
		}
	}
}