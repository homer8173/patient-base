            $(function() {
                $(window).resize(function(){
                    // resize chart on resize if required
                    if(typeof drawChart == 'function')
                        drawChart();
                });   
            }); 