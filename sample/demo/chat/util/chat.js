export function alt(){
    alert("test")
}
/*
This is an example snippet - you should consider tailoring it
to your service.
*/

/*
This is an example snippet - you should consider tailoring it
to your service.
*/
class Chat {

    operationsDoc = `
  query MyQuery {
    Address {
      address
      Address_id
    }
  }
`;


    async fetchGraphQL(operationsDoc, operationName, variables) {
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


    fetchMyQuery() {
        return this.fetchGraphQL(
            this.operationsDoc,
            "MyQuery",
            {}
        );
    }

    async startFetchMyQuery() {
        const { errors, data } = await this.fetchMyQuery();

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

    //export startFetchMyQuery();




    //firebase.initializeApp(config);

    // データベースの参照を準備
    //var messagesRef = firebase.database().ref().child('messages')
    //var messageFeed = document.getElementById("message-feed");

    /*
    messagesRef.on('child_changed', function (data) {
        //alert("data changed")
        //  alert(data.key)
        //alert(JSON.stringify(data.val()));
        var msg = data.val();
        //alert(msg.name)
        //alert(msg.body)
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
    */

    /*
    // 既存メッセージを表示
    messagesRef.on('child_added', function (snapshot) {
        startFetchMyQuery();
        var msg = snapshot.val();
        //alert(JSON.stringify(msg))
        $('<li>').text("" + msg.name + ': ' + msg.text).prependTo('#messages');
        $('#message-feed').append('<div class="message message-from"><div class="message-name"><h1>BPMCHAT success 272 </h1></div><div class="message-body"><p><h3>' + msg.name + ': ' + msg.text + '</h3><p>Today</p></div>');
        messageFeed.scrollTop = messageFeed.scrollHeight;
        timedResponse();
    
    });
    */
    /*
    $('#message-input').click(function () {
        // 新規メッセージを投稿
        var messagesRef = firebase.database().ref().child('messages')
        messagesRef.push({
            name: $('#message-input').val(),
            text: $('#message-input').val()
        });
        //alert($('#message').val())
    
        google.script.run.execGAS(1, $('#message').val())
    });
    */
}
