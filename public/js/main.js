var app = angular.module('labahn', ['ngAnimate']);

function scrollUp() {

	// window.scrollTo(0,0);
	if (document.body.scrollTop!=0 || document.documentElement.scrollTop!=0) {

	    window.scrollBy(0,-50);

	    timeOut = setTimeout('scrollUp()',10);

  	} else {

	  	clearTimeout(timeOut);

	}

}

app.factory('NavigationService', ['$rootScope', function($rootScope) {

	var NavigationService = {};

	NavigationService.open = function() {

		$rootScope.$broadcast('open');

	}

	NavigationService.close = function() {

		$rootScope.$broadcast('close');

	}

	return NavigationService;

}]);

app.controller('SlideshowController', ['$scope', '$interval', function($scope, $interval) {

	var interval;

	$scope.paused = false;

	$scope.hiddenPaused = false;

	$scope.interval = null;

	$scope.autoPlay = true;

	$scope.slide = [

		true,
		false,
		false,
		false,
		false,
		false,
		false,
		false

	];

	$scope.next = function() {

		var position = $scope.slide.indexOf(true);
		var length = $scope.slide.length;

		$scope.slide[position] = false;

		if (position === (length - 1)) {

			$scope.slide[0] = true;

		} else {

			$scope.slide[position + 1] = true;

		}

	}

	$scope.previous = function() {

		var position = $scope.slide.indexOf(true);
		var length = $scope.slide.length;

		$scope.slide[position] = false;

		if (position === 0) {

			$scope.slide[length - 1] = true;

		} else {

			$scope.slide[position - 1] = true;

		}

	}

	$scope.play = function() {

		if ( angular.isDefined(interval) ) return;

		if ($scope.autoPlay === false) return;

		interval = $interval(function() {

			$scope.next();

			console.log("interval is going");

		}, 4000);

		$scope.paused = false;

	}

	$scope.pause = function(hidden) {

		if (angular.isDefined(interval)) {

			$interval.cancel(interval);
            interval = undefined;
        }

        if (!hidden) {

        	$scope.paused = true;

        }
        

	}

	$scope.play();


}]);



app.controller('NavigationController', ['$scope', function($scope) {


	$scope.open = false;

	$scope.$on('open', function() {

		$scope.open = true;
		scrollUp();

	});

	$scope.$on('close', function() {

		$scope.open = false;

	});

}]);


app.controller('HamburgerController', ['$scope', 'NavigationService', function($scope, NavigationService) {

	$scope.open = false;

	$scope.change = function() {

		if ($scope.open) {

			NavigationService.close();

		} else {

			NavigationService.open();

		}

		$scope.open = !$scope.open;

	}



}]);


var FooterSpacer = {

	init : function() {

		this.setHeight();

	}, 

	setHeight : function() {

		var spacer = $(".footer-spacer");
		var footer = $(".footer");

		spacer.height(footer.outerHeight());

	}

}


$(document).ready(function() {

	FooterSpacer.init();

	setTimeout(function() {

		FooterSpacer.init();

	}, 1000);

	setTimeout(function() {

		FooterSpacer.init();

	}, 2000)

});

$(window).resize(function() {

	FooterSpacer.init();

});
