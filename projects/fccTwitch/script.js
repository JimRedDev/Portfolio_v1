$(document).ready(function(){
    // FOLLOWED USER ARRAY
    var users = ["ESL_SC2", "OgamingSC2", "cretetion", "storbeck", "habathcx", "RobotCaleb", "noobs2ninjas", "mindcrack"];
    
    // FREE CODE CAMP STATUS
    var url = "https://api.twitch.tv/kraken/streams/freecodecamp/?client_id=fw15ymoqczyagsdp6fhgri7brp4to8";
    $.getJSON(url, function(data1){
      if(data1.stream === null){
        $('#fccStatus').html('<a href="https://www.twitch.tv/freecodecamp" target="_blank"><p>Free Code Camp is currently:</p></a>');
        $('#fccLive').html("<p>OFFLINE</p>");
        $('#fccLive').addClass("offline blinking");
        $('#fcc').css("border-right", "5px solid red");
      }else {
        $('#fccStatus').html('<p>Whoop! Free Code Camp is:</p>');
        $('#fccLive').html("<p>ONLINE!</p>");
        $('#fccLive').addClass("online blinking");
        $('#fcc').css("border-right", "5px solid green");
      }
    });//END getJSON
    
    // FOLLOWED USER STATUS
    for(var i = 0; i < users.length; i++){
        var secondUrl = 'https://api.twitch.tv/kraken/streams/'+users[i]+'/?client_id=fw15ymoqczyagsdp6fhgri7brp4to8';
        
        $.getJSON(secondUrl, function(data2){
          // FOR OFFLINE USERS
          if(data2.stream === null){
            var thirdUrl = data2._links.channel + '/?client_id=fw15ymoqczyagsdp6fhgri7brp4to8';
            $.getJSON(thirdUrl, function(data3){
              var status = "OFFLINE!";
              var logo = data3.logo;
              var name = data3.display_name.toUpperCase();
                if(logo === null){
                  logo = 'https://workinfo.info/images/modules/directory/listings/thumbs/no_logo.jpg';
                }
              
              $("#twitchUser").prepend("<div class='row twitchUser signalOff'>" + 
                                       "<div class='col-xs-3 text-center'>" +
                                       "<img src='" +logo+ "'>" + "</div>" +
                                       "<div class='col-xs-6 text-center'><h2><a href='"+data3.url+"'>" +name+ "</a></h2></div>" + 
                                       "<div class='col-xs-3 text-center userStatus'><h4><span class='offline blinking'>" +status+ "</span></h4></div>" + "</div>");
              //$('.twitchUser').css("border-right", "5px solid red");
            });// End json
          }// End if
          
          // FOR ONLINE USERS
          if(data2.stream != null){
          var logo = data2.stream.channel.logo;
          var message = data2.stream.channel.status;
          var name = data2.stream.channel.name.toUpperCase();
          var status = "ONLINE!";
            if(logo === null){
                  logo = 'https://workinfo.info/images/modules/directory/listings/thumbs/no_logo.jpg';
                }
            
          $("#twitchUser").prepend("<div class='row twitchUser signalLive'>" + 
                                  "<div class='col-xs-3 text-center'>" +
                                  "<img src='" +logo+ "'>" + "</div>" +
                                  "<div class='col-xs-6 text-center'><h2><a href='"+data2.stream.channel.url+"'>" +name+ "</a></h2>" + 
                                   "<h4><a href='"+data2.stream.channel.url+"'>"+message+"</a></h4>" + "</div>" + 
                                  "<div class='col-xs-3 text-center userStatus'><h4><span class='online'>"+status+"</span></h4></div>" + "</div>");
            //$('.twitchUser').css("border-right", "5px solid green");
          }
          
          
          
          
        });//end getjson
      }// end for
    
    var fourthUrl = "https://api.twitch.tv/kraken/streams/featured/?client_id=fw15ymoqczyagsdp6fhgri7brp4to8";
    $.getJSON(fourthUrl, function(data4){
      for(var i = 0; i < data4.featured.length; i++) {
        
        console.log()
        var logo = data4.featured[i].stream.channel.logo;
        var name = data4.featured[i].stream.channel.display_name;
        var game = data4.featured[i].stream.game;
        var type = data4.featured[i].stream.stream_type.toUpperCase();
        var viewers = data4.featured[i].stream.viewers;
          if(logo === null){
                  logo = 'https://workinfo.info/images/modules/directory/listings/thumbs/no_logo.jpg';
                }
        
        $('#streamFeature').prepend("<div class='row twitchUser signalLive'>" + 
                                    "<div class='col-xs-3 text-center'>" +
                                    "<img src='" +logo+ "'>" + "</div>" +
                                    "<div class='col-xs-6 text-center'><h2><a href='"+data4.featured[i].stream.channel.url+"' taget='_blank'>" +name+ "</a></h2>" + 
                                    "<h4><a href='"+data4.featured[i].stream.channel.url+"' target='_blank'>"+game+"</a></h4>" + "</div>" + 
                                    "<div class='col-xs-3 text-center userStatus'><h4><span class='online'>"+type+"</span></h4>" + 
                                    "<h4>"+viewers+" viewers</h4></div>" + "</div>");
      }//end for
      
    }); //END getJSON
    
    $('#onlineOnly').click(function(){
      $('#streamFeature').css('display', 'none');
      $('#twitchUser').css('display', 'block');
      $('.signalOff').toggle();
      $('.signalLive').css("display", "block");
    });
    
    $('#offlineOnly').click(function(){
      $('#streamFeature').css('display', 'none');
      $('#twitchUser').css('display', 'block');
      $('.signalOff').css("display", "block");
      $('.signalLive').toggle();
    });
    
    $('#featuredOnly').click(function(){
      $('#twitchUser').toggle();
      $('#streamFeature').toggle();
    });
    
    
   // TEXT BLINK FUNCTION
   function blinker() {
     $('.blinking').fadeOut(500);
     $('.blinking').fadeIn(500);
   } // END BLINKER
    setInterval(blinker, 1500);
  });// END READY