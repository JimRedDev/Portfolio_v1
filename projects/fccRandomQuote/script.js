$(document).ready(function(){
    
    
    $('#newQuote').on('click', function(){
      var colorSelect = '#';
      var value = ['0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f'];
        
        for(var i = 0; i < 6; i++){
          var j = Math.floor((Math.random() * 16) + 1);
          colorSelect += value[j];
        }
        
      $('.clrChange').css("background-color", colorSelect);
      
      $.getJSON('https://talaikis.com/api/quotes/random/', function(json){
        var quote = JSON.stringify(json.quote);
        quote = quote.match(/\w+/gi).join(' ');
        
        var author = JSON.stringify(json.author);
        author = author.match(/\w+/gi).join(' ');
       
        $('.quoteHere').html(quote);
        $('.person').html(author);
         
      });
      });
    
    $('#tweet').on('click', function(){
      var share = $('.quoteHere').html() + ' -' + $('.person').html();
      
      $('#tweet').attr('href', 'https://twitter.com/intent/tweet?text=' + share);
      
    });
      
    $('#tumblr').on('click', function(){
      var data = $('.quoteHere').html();
      var dataBy = $('.person').html();
      
      $('#tumblr').attr('href', 'http://tumblr.com/widgets/share/tool?content=' + data + '&caption=' + dataBy + '&posttype=quote')
    });
    
      
      
    });//DOCUMENT READY END