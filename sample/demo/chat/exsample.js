 //  var ws = "";
 var mediaExpand = document.getElementById("media-expand-arrow");
 var mediaBar = document.getElementById("media-bar");
 var mediaCross = document.getElementById("media-bar-cross");
 var messageFeed = document.getElementById("message-feed");

$(function () {
  $("#play").on("click", function () {
    videoControl("playVideo");
  });

  $("#pause").on("click", function () {
    videoControl("pauseVideo");
  });

  $("#stop").on("click", function () {
    videoControl("stopVideo");
  });

  $("#clear").on("click", function () {
    videoControl("clearVideo");
  });

  function videoControl(action) {
    var $playerWindow = $('#popup-YouTube-player')[0].contentWindow;
    $playerWindow.postMessage('{"event":"command","func":"' + action + '","args":""}', '*');
  }
});

/*
This is an example snippet - you should consider tailoring it
to your service.
*/

/*
This is an example snippet - you should consider tailoring it
to your service.
*/

async function fetchGraphQL(operationsDoc, operationName, variables) {
  const result = await fetch(
    "https://showcase.dreamso.net/v1/graphql",
    {
      method: "POST",
      body: JSON.stringify({
        query: operationsDoc,
        variables: variables,
        operationName: operationName
      })
    }
  );

  return await result.json();
}

const operationsDoc = `
query MyQuery {
Address {
  address
  Address_id
}
}
`;

function fetchMyQuery() {
  return fetchGraphQL(
    operationsDoc,
    "MyQuery",
    {}
  );
}

async function startFetchMyQuery() {
  const { errors, data } = await fetchMyQuery();

  if (errors) {
    // handle those errors like a pro
    console.error(errors);
  }

  // do something great with this precious data
  //データ内容の表示
  console.log("graphql connect")
  console.debug(JSON.stringify(data))
  console.log(data);
}

//startFetchMyQuery();

var config = {
  apiKey: "AIzaSyCsOjFyAAuFr1CITcnufG-GpZBKpLgUP90",
  authDomain: "rpa999-56929.firebaseapp.com",
  databaseURL: "https://rpa999-56929.firebaseio.com",
  projectId: "rpa999-56929",
  storageBucket: "rpa999-56929.appspot.com",
  messagingSenderId: "155298248089",
  appId: "1:155298248089:web:e25d64dc9f5370c4"
};

firebase.initializeApp(config);

// データベースの参照を準備
var messagesRef = firebase.database().ref().child('messages')
var messageFeed = document.getElementById("message-feed");

messagesRef.on('child_changed', function (data) {
  //alert("data changed")
  //  alert(data.key)
  //alert(JSON.stringify(data.val()));
  var msg = data.val();
  var lg = JSON.stringify(msg)
  //alert(lg)
  //     var msg = snapshot.val();
  //           $('<li>').text(""+msg.name + ': ' + msg.body).prependTo('#messages');
  //        $('#message-feed').append('<div class="message message-from"><div class="message-name"><h1>BPMCHAT success 272 </h1></div><div class="message-body"><p><h3>' + msg.name + ': ' + msg.body+ '</h3><p>Today</p></div>');
  //    messageFeed.scrollTop = messageFeed.scrollHeight;
  //          timedResponse();
  //location.reload()
  //alert(lg)
  //  alert(lg)
  //setCommentValues(postElement, data.key, data.val().text, data.val().author);
  //       $('#message-feed').append('<div class="message message-from"><div class="message-name"><h1>BPMCHAT success 272 </h1></div><div class="message-body"><p><h3>' + msg.name + ': ' + msg.body + '</h3><p>Today</p></div>');
  //     $('#message-feed').append('<div class="message message-from"><div class="message-name"><h1>BPMCHAT success 272 </h1></div><div class="message-body"><p><h3>ｓ' + msg.name + ': ' + msg.body + '</h3><p>Today</p></div>');
  //   timedResponse();
});

// 既存メッセージを表示
messagesRef.on('child_added', function (snapshot) {
  startFetchMyQuery();
  var msg = snapshot.val();
  //alert(JSON.stringify(msg))
  $('<li>').text("" + msg.name + ': ' + msg.text).prependTo('#messages');
  $('#message-feed').append('<div class="message message-from"><div class="message-name"><h1>BPMCHAT success 272 </h1></div><div class="message-body"><p><h3>' + msg.name + ': ' + msg.text + '</h3><p>Today</p></div>');
  //messageFeed.scrollTop = messageFeed.scrollHeight;
  //timedResponse();
});



/*
    var main_layout = new dhtmlXLayoutObject(document.body, '1C');
    var a = main_layout.cells('a');
    var toolbar_1 = a.attachToolbar();
    toolbar_1.setIconsPath('https://dhtmlx.com/docs/products/visualDesigner/live/preview/codebase/imgs/');
    var obj2 =

      toolbar_1.loadStruct('https://dhtmlx.com/docs/products/visualDesigner/live/preview/data/toolbar.xml', function () { });
    var objidbot = document.getElementById("chatobj");
    a.attachObject(objidbot);
    */
