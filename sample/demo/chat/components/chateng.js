let spflg = 0 //しゃべるフラグ

'use strict';

// 基本クラス Point
class Point {
    constructor(x, y) {
        this.x = x;
        this.y = y;
    }
}

// クラス Point から派生したクラス PointEx
class PointEx extends Point {
    constructor(x, y) {
        super(x, y);
    }

    // 原点からの距離を計算する。
    distance() {
        return Math.sqrt(this.x * this.x + this.y * this.y);
    }


    yahookeitaiso() {

        /********************************************
                     データ翻訳 形態素
                     *******************************************/
        //sendMessage("形態素開始 chat.html 88")
        //google.script.run.withSuccessHandler(this.onSuccess3)
        //    .yahooTextSegmentation("今日はいい天気");

    }

    /*******************************************
         GOOGLE API が　成功した場合
         ********************************************/

    onSuccess3(message) {
        /*
            data = JSON.parse(message)
            window.open(data.video, "OKGOOGLE", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");
            window.open(data.google, "OKGOOGLE1", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");


            messageFeed.scrollTop = messageFeed.scrollHeight;
            wScroll();
          */
        return 1; //message;
    }


    onSuccess2(message) {
        //ws.send(message+"103");
        $('#message-feed').append(
            '<div class="message message-from"><div class="message-name"><h1>BPMCHAT</h1></div><div class="message-body"><p><h3>' + message + '</h3></p></div>'
        );
        messageFeed.scrollTop = messageFeed.scrollHeight;
        wScroll();

        var msg = new SpeechSynthesisUtterance();
        msg.volume = 1;
        msg.rate = 1;
        msg.pitch = 2;
        // テキストスピーチ開始
        msg.text = message; //results[i][0].transcript; //document.querySelector("#text1").value; // しゃべる内容
        // msg.lang = "ja-UP";
        msg.lang = "en-US";


        speechSynthesis.speak(msg);


        return message;
    }

    onSuccess(messageVal2) {
        //get time
        function addZero(i) {
            if (i < 10) {
                i = "0" + i
            }
            return i;
        }

        var d = new Date();
        var h = addZero(d.getHours());
        var m = addZero(d.getMinutes());
        //$('#message-feed').append(
        //'<div class="message message-to"><div class="message-name"><h1>You</h1></div><div class="message-body"><p>' + messageVal2 + '</p></div><div class="message-timestamp"><p>Today ' + h + ' : ' + m + '</p></div>'
        //);

        $('#message-feed').append(
            '<div class="message message-from"><div class="message-name"><h1>BPMCHAT success 272 </h1></div><div class="message-body"><p><h3>' + messageVal2 + '</h3><p>Today ' + h + ' : ' + m + '</p></div>'
        );
        messageFeed.scrollTop = messageFeed.scrollHeight;
        wScroll();
        /*********
         popup windows の場合
         **********/
        var result = messageVal2.match(/sysworkflow/g); //httpがあったら
        for (r in result) {
            window.open(messageVal2, "sysworkflow", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");
        }

        var result = messageVal2.match(/WEBSOEKT/g); //httpがあったら
        //Logger.log(result.length);
        for (r in result) {
            window.open(messageVal2, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");
        }
        //var div = document.getElementById('output');
        //div.innerHTML = 'You have ' + numUnread
        //  + ' unread messages in your Gmail inbox.';
    }
}

var p = new PointEx(2, 4);
p.yahookeitaiso();
console.log("(%d, %d)", p.x, p.y);
console.log("distance = %d", p.distance());
//alert("(%d, %d)", p.x, p.y);


window.onload = function () {

    $("div.media-button.media-video").click(function () {
        alert("test");
    });
    var resultCount = 0;
    var flag_speech = 0;
    var flag_speech2 = 0;
    var popup = "";

    var output, ws;

    //ar resultCount = 0;
    /**
     @function vw_function2
     @日本語での会話
     */
    function vr_function2(ws) {
        var resultCount = 0;
        window.SpeechRecognition = window.SpeechRecognition || webkitSpeechRecognition;
        var recognition = new webkitSpeechRecognition();
        recognition.lang = "ja";
        //recognition.lang = "en";
        recognition.interimResults = true;
        recognition.continuous = true;
        recognition.count = 0;

        recognition.onsoundstart = function () {
            document.getElementById("status").innerHTML = "認識中";
        };
        recognition.onnomatch = function () {
            document.getElementById("status").innerHTML = "もう一度試してください";
        };
        recognition.onerror = function () {
            document.getElementById("status").innerHTML = "エラー";
            if (flag_speech2 == 0)
                vr_function2(ws);
        };
        recognition.onsoundend = function () {
            document.getElementById("status").innerHTML = "停止中";
            vr_function2(ws);
        };
        var zz = 0;
        var word2 = "";
        recognition.onresult = function (event) {
            //zz++;
            //if (zz > 3) {
            //    recognition.stop();
            //alert(zz)
            //  zz = 0;
            //}
            var results = event.results;
            //var messageInput = document.getElementById("message-input");
            //var url = document.getElementById("status");
            //var messageVal = messageInput.value;
            //var urls = url.value;
            //messageInput.value = "";
            //  appendMessage();
            //  messageFeed.scrollTop = messageFeed.scrollHeight;
            //  timedResponse();
            //ws.send(messageVal); //websockeでメッセージ送信
            var z = 0;
            //スプレッドシートに登録
            var results = event.results;
            var messageInput = document.getElementById("message-input");
            var url = document.getElementById("status");
            var messageVal = messageInput.value;
            var urls = url.value;
            messageInput.value = "";

            var length = event.results.length;

            if (length > 0) {//　console.log(event.results[length-1][0].transcript);
                document.getElementById("message-input").value = event.results[length - 1][0].transcript;

            }
            // this.resultCount++;
            resultCount++;

            //登録終了の処理
            for (var i = event.resultIndex; results.length; i++) {
                //alert(i)
                console.log("final = " + results[i])
                //for (var i = 0; i < 0; i++) {
                //認識完了の際に　Finalに入る  
                if (i == 0) {//results[i].isFinal) {
                    document.getElementById("message-input").value = results[i][0].transcript;
                    onPutChatClick(results[i][0].transcript)

                    google.script.run
                        .withSuccessHandler(
                            //無名関数にデータを入れる　A１のシャベルフラグを取得
                            function (message) {
                                // Respond to success conditions here.
                                //showStatus('Cell set to reference value: ' + value);
                                // element.disabled = false;
                                spflg = message

                                //Logger.log(message)
                                //alert(message)
                                //speechSynthesis.speak(msg);
                            })
                        .withFailureHandler(
                            function (msg, element) {
                                // Respond to failure conditions here.
                                showStatus(msg, 'error');
                                element.disabled = false;
                            })
                        .withUserObject(this)
                        .myFunction2();


                    // 話すための機能をインスタンス化して、色々と値を設定します.
                    var msg = new SpeechSynthesisUtterance();
                    msg.volume = 1;
                    msg.rate = 1;
                    msg.pitch = 0.9;//変な声
                    // テキストスピーチ開始
                    msg.text = results[i][0].transcript; //document.querySelector("#text1").value; // しゃべる内容
                    //言語設定
                    msg.lang = "ja-JP";
                    //msg.lang = "en-US";
                    /*******************************************************/
                    //ここでしゃべる    コメントあると
                    /*******************************************************/

                    if (msg.text == 'sex')
                        alert("sex")
                    //if(spflg == 1) 
                    //alert(msg.text)
                    if (spflg == 1)
                        speechSynthesis.speak(msg);
                    //alert("stop")
                    /*
                    google.script.run
                        .withSuccessHandler(
                            //無名関数にデータを入れる
                            function (message) {
                                // Respond to success conditions here.
                                //showStatus('Cell set to reference value: ' + value);
                                // element.disabled = false;
                                msg.text = message;
                                //次のデータの読み上げ
                                console.log("chateng.html")
                                //speechSynthesis.speak(msg);
                            })
                        .withFailureHandler(
                            function (msg, element) {
                                // Respond to failure conditions here.
                                //showStatus(msg, 'error');
                                element.disabled = false;
                            })
                        .firebase(msg.text);
                    */

                    /*************************************************
                     //ここでデータの登録 processmaker へ登録
                     **************************************************/
                    console.debug("start next data")
                    google.script.run
                        .withSuccessHandler(
                            //無名関数にデータを入れる
                            function (message) {
                                // Respond to success conditions here.
                                //showStatus('Cell set to reference value: ' + value);
                                // element.disabled = false;
                                msg.text = message;
                                //次のデータの読み上げ
                                console.log("chateng.html")
                                if (spflg == 1)
                                    speechSynthesis.speak(msg);
                            })
                        .withFailureHandler(
                            function (msg, element) {
                                // Respond to failure conditions here.
                                showStatus(msg, 'error');
                                element.disabled = false;
                            })
                        .withUserObject(this)
                        .getNextCellData();

                    vr_function2(ws);
                    //if(results[i][0].transcript == "検索")

                }
                else {
                    document.getElementById("message-input").value = "[途] " + results[i][0].transcript;
                    flag_speech2 = 1;
                }
            }
        }
        flag_speech2 = 0;
        //document.getElementById("status").innerHTML = "start";
        recognition.start();
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /**
     WEBSOCKET   通信
     */

    //  var ws = "";
    var mediaExpand = document.getElementById("media-expand-arrow");
    var mediaBar = document.getElementById("media-bar");
    var mediaCross = document.getElementById("media-bar-cross");
    var messageFeed = document.getElementById("message-feed");

    console.log(mediaExpand + mediaBar);


    /**********************************************
     //メディアオープン
     ***********************************************/
    function mediaOpen() {
        mediaBar.className += " media-bar-open"
    };

    mediaExpand.addEventListener("click", mediaOpen, false);

    function mediaClose() {
        mediaBar.className = "media-bar"
    };

   // mediaCross.addEventListener("click", mediaClose, false);

    /**********************************************
     //メディアオープン
     ***********************************************/

    function wScroll() {
        console.log(messageFeed.scrollTop);

        messageHeight = messageFeed.offsetHeight;

        var heightToScroll = (130);
        var header = document.getElementById('header');

        if (messageFeed.scrollTop > heightToScroll) {
            header.className = "header header-scrolled"
            messageFeed.className = "message-feed message-feed-scrolled"
        }
        else if (messageFeed.scrollTop < 1) {
            header.className = "header header-unscrolled"
            messageFeed.className = "message-feed"
        }
    };

    //messageFeed.addEventListener("scroll", wScroll, false);

    //wScroll();

    /*******************************************
     GOOGLE API が　成功した場合
     ********************************************/

    function onSuccess3(message) {
        data = JSON.parse(message)
        for (datas in data) {
            window.open(data[datas], datas, "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");
        }
        // window.open(data.google, "OKGOOGLE1", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");
        //window.open(data.trend, "OKGOOGLE3", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");


        //messageFeed.scrollTop = messageFeed.scrollHeight;
        //wScroll();
        return message;
    }


    function onSuccess2(message) {
        //ws.send(message+"103");
        $('#message-feed').append(
            '<div class="message message-from"><div class="message-name"><h1>BPMCHAT</h1></div><div class="message-body"><p><h3>' + message + '</h3></p></div>'
        );
        messageFeed.scrollTop = messageFeed.scrollHeight;
        wScroll();

        var msg = new SpeechSynthesisUtterance();
        msg.volume = 1;
        msg.rate = 1;
        msg.pitch = 2;
        // テキストスピーチ開始
        msg.text = message; //results[i][0].transcript; //document.querySelector("#text1").value; // しゃべる内容
        // msg.lang = "ja-UP";
        msg.lang = "en-US";


        speechSynthesis.speak(msg);


        return message;
    }

    function onSuccess(messageVal2) {
        //get time
        function addZero(i) {
            if (i < 10) {
                i = "0" + i
            }
            return i;
        }

        var d = new Date();
        var h = addZero(d.getHours());
        var m = addZero(d.getMinutes());
        //$('#message-feed').append(
        //'<div class="message message-to"><div class="message-name"><h1>You</h1></div><div class="message-body"><p>' + messageVal2 + '</p></div><div class="message-timestamp"><p>Today ' + h + ' : ' + m + '</p></div>'
        //);

        $('#message-feed').append(
            '<div class="message message-from"><div class="message-name"><h1>BPMCHAT success 272 </h1></div><div class="message-body"><p><h3>' + messageVal2 + '</h3><p>Today ' + h + ' : ' + m + '</p></div>'
        );
        //messageFeed.scrollTop = messageFeed.scrollHeight;
        //wScroll();
        /*********
         popup windows の場合
         **********/
        var result = messageVal2.match(/sysworkflow/g); //httpがあったら
        for (r in result) {
            window.open(messageVal2, "sysworkflow", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");
        }

        var result = messageVal2.match(/WEBSOEKT/g); //httpがあったら
        //Logger.log(result.length);
        for (r in result) {
            window.open(messageVal2, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");
        }

        //var div = document.getElementById('output');
        //div.innerHTML = 'You have ' + numUnread
        //  + ' unread messages in your Gmail inbox.';
    }

    function logMessage(event) {

        //get time
        function addZero(i) {
            if (i < 10) {

                i = "0" + i
            }
            return i;
        }

        var d = new Date();
        var h = addZero(d.getHours());
        var m = addZero(d.getMinutes());

        //build message

        //            google.script.run.withSuccessHandler(onSuccess2)
        //                .getUnreadEmails();

        /*********************************************
         キーボードでのリターンでのコールバック関数
         **********************************************/


        function appendMessage(numUnread) {
            alert("test")
            console.log("chat line 742")
            //ws.send(messageVal); //websockeでメッセージ送信
            //WEBAPI二送信　ws.sendで結果がくる
            //BPM実行　サブプロセス名でのタスクが実行される

            /*****************************************
             ここで検索してデータに登録
             *******************************************/
            //google.script.run.withSuccessHandler(onSuccess2)
            //    .translater(messageVal);
            /********************************************
             データ翻訳 形態素
             *******************************************/
            sendMessage("形態素開始 chat.html 88")
            //google.script.run.withSuccessHandler(onSuccess3)
            //    .yahooTextSegmentation(messageVal);

            /*********************************************
             BPM実行
             **********************************************/
            //google.script.run.bpmRestvoice(messageVal);

            //google.script.run.withSuccessHandler(onSuccess2)
            //                  .APITEST(messageVal);
            //翻訳


            if (messageVal == "業務フロー") {
                //https://dev.bpmboxes.com/sysworkflow/en/green/cases/main?sid=2151820555ab59cc351b9b9077374372
                window.open("https://dev.bpmboxes.com/sysworkflow/en/green/cases/main?sid=2151820555ab59cc351b9b9077374372", "MsgWindow", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");
                //ここの処理は非常に重いのでコメント
                // google.script.run.withSuccessHandler(onSuccess2)
                //     .bpmRestTest(messageVal);
            }

            //形態素
            //google.script.run.withSuccessHandler(onSuccess)
            //    .yahooTextSegmentation(messageVal);


            if (messageVal == "新規") {
                google.script.run.withSuccessHandler(onSuccess)
                    .createCase(23344);
            }

            if (messageVal == "作業更新") {
                google.script.run.withSuccessHandler(onSuccess)
                    .routeCase();
            }


            $('#message-feed').append(
                '<div class="message message-to"><div class="message-name"><h1>You</h1></div><div class="message-body"><p>' + messageVal + '</p></div><div class="message-timestamp"><p>Today ' + h + ' : ' + m + '</p></div>'
            );
        }

        //set event trigger

        //var messageInput = document.getElementById("message-input");

        //var messageVal = messageInput.value;

        //hipsum responses

        var responseTimed;

        function timedResponse() {
            setTimeout(
                function appendResponse() {
                    var
                        randNumber = Math.floor((Math.random() * 10) + 1)


                    switch (randNumber) {
                        /*
                            case 1:
                                $('#message-feed').append(
                                    '<div class="message message-from"><div class="message-name"><h1>BPMCHAT</h1></div><div class="message-body"><p>BPMCHAT使い方１</p></div><div class="message-timestamp"><p>Today ' + h + ' : ' + m + '</p></div>'
                                );
                                break;
                            case 2:
                                $('#message-feed').append(
                                    '<div class="message message-from"><div class="message-name"><h1>BPMCHAT</h1></div><div class="message-body"><p>BPMCHAT使い方１　業務フロー<p>Today ' + h + ' : ' + m + '</p></div>'
                                );
                                break;
                            case 3:
                                $('#message-feed').append(
                                    '<div class="message message-from"><div class="message-name"><h1>BPMCHAT</h1></div><div class="message-body"><p>BPMCHAT使い方１　タスク</p></div><div class="message-timestamp"><p>Today ' + h + ' : ' + m + '</p></div>'
                                );
                                break;
                            case 4:
                                $('#message-feed').append(
                                    '<div class="message message-from"><div class="message-name"><h1>BPMCHAT</h1></div><div class="message-body"><p>BPMCHAT使い方１　ケース</p></div><div class="message-timestamp"><p>Today ' + h + ' : ' + m + '</p></div>'
                                );
                                break;
                            case 5:
                                $('#message-feed').append(
                                    '<div class="message message-from"><div class="message-name"><h1>BPMCHAT</h1></div><div class="message-body"><p>BPMCHAT使い方１<p>Today ' + h + ' : ' + m + '</p></div>'
                                );
                                break;
                            case 6:
                                $('#message-feed').append(
                                    '<div class="message message-from"><div class="message-name"><h1>BPMCHAT</h1></div><div class="message-body"><p> BPMCHAT使い方１<p>Today ' + h + ' : ' + m + '</p></div>'
                                );
                                break;
                            case 7:
                                $('#message-feed').append(
                                    '<div class="message message-from"><div class="message-name"><h1>BPMCHAT</h1></div><div class="message-body"><p>BPMCHAT使い方１</p></div><div class="message-timestamp"><p>Today ' + h + ' : ' + m + '</p></div>'
                                );
                                break;
                            case 8:
                                $('#message-feed').append(
                                    '<div class="message message-from"><div class="message-name"><h1>BPMCHAT</h1></div><div class="message-body"><p> BPMCHAT使い方１</p></div><div class="message-timestamp"><p>Today ' + h + ' : ' + m + '</p></div>'
                                );
                                break;
                                */
                    }
                    messageFeed.scrollTop = messageFeed.scrollHeight;
                }, 2500);
        };


        //fire on enter
        /******************************************************************
         リターンコードでの処理
         *******************************************************************/

        if (event.keyCode == 13) {
            event.preventDefault();
            messageInput.value = "";
            appendMessage();
            messageFeed.scrollTop = messageFeed.scrollHeight;
            timedResponse();
        }

    };

    document.addEventListener("keypress", logMessage, false);


    // send message
    function sendMessage(msg) {
        ws.send(msg);
        log('Message sent');
    }

    function log(string) {
        //var p = document.createElement("p");
        //p.style.wordWrap = "break-word";
        //p.textContent = string;
        //output.appendChild(p);

        console.log(string);
    }

    //setup();

    vr_function2(ws);

}

/**
 * Calls the server to modify the sheet.
 * Replace the currently selected cell value with the value in the
 * sidebar text field.
 */
function onPutChatClick(value) {
    this.disabled = true;

    // Gather any information that needs to be sent to the server here.
    /// var value = $('#message-input').val();

    // Send the value to the server and handle the response.
    google.script.run
        .withSuccessHandler(
            function (msg, element) {
                // Respond to success conditions here.
                showStatus('Cell set to reference value: ' + value);
                element.disabled = false;
            })
        .withFailureHandler(
            function (msg, element) {
                // Respond to failure conditions here.
                showStatus(msg, 'error');
                element.disabled = false;
            })
        .withUserObject(this)
        .setActiveValue(value);
}

$('#message-input').click(function () {
    //window.top.document.getElementsByClassName("script-application-sidebar")[0].style.width = '100px';
    // 新規メッセージを投稿
    var messagesRef = firebase.database().ref().child('messages')
    messagesRef.push({
        name: $('#message-input').val(),
        text: $('#message-input').val()
    });
    //alert($('#message').val())

    google.script.run.execGAS(1, $('#message').val())
});
/**
 * Calls the server to modify the sheet.
 * Replace the currently selected cell value with the value in the
 * sidebar text field.
 */
function onPutChatClick2(value) {
    this.disabled = true;
    // Gather any information that needs to be sent to the server here.
    /// var value = $('#message-input').val();
    // Send the value to the server and handle the response.
    google.script.run
        .withSuccessHandler(
            function (msg, element) {
                // Respond to success conditions here.
                //  showStatus('Cell set to reference value: ' + value);
                //   element.disabled = false;
            })
        .withFailureHandler(
            function (msg, element) {
                // Respond to failure conditions here.
                //   showStatus(msg, 'error');
                //  element.disabled = false;
            })
        .withUserObject(this)
        .setActiveValue2(value);
}

function showStatus(msg, classId) {
    $('#sidebar-status').removeClass().html(msg);
    if (classId) {
        $('#sidebar-status').addClass(classId);
    }
}
