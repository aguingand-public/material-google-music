angular.module('playmusic',[])
.controller('AlbumsController',['$log',function($http,$log) {
    var data = {
        albums : []
    };
    
    for(var i=0;i<20;i++)
        data.albums.push({
            name:"Lorem ipsum",
            artist:"Artiste",
            cover:Math.floor((Math.random() * 9) + 1)+"/cover.jpg"
        });

     
    
    angular.extend(this, {data:data});
}])
.controller('AlbumPageController',['$log','$document',function($log,$document) {

    angular.element($document.find('main'))[0].scrollTop+=50;
    $log.log(angular.element($document.find('main'))[0]);
    $document.find('main').on('DOMSubtreeModified', function() {
        $log.log(this);
        $log.log(angular.element(this));
        //$document.find('main')[0].scrollTop+=50;
        angular.element(this)[0].scrollTop+=50;
    });

}]);