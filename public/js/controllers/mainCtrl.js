angular.module('mainCtrl', [])

	.controller('mainController', function($scope, $http, Post) {
		// object to hold all the data for the new Post form
		$scope.postData = {};

		// loading variable to show the spinning loading icon
		$scope.loading = true;
		
		// get all the Posts first and bind it to the $scope.Posts object
		Post.get()
			.success(function(data) {
				$scope.Posts = data;
				$scope.loading = false;
			});


		// function to handle submitting the form
		$scope.submitPost = function() {
			$scope.loading = true;

			// save the Post. pass in Post data from the form
			Post.save($scope.postData)
				.success(function(data) {
					$scope.postData = {};
					// if successful, we'll need to refresh the Post list
					Post.get()
						.success(function(getData) {
							$scope.Posts = getData;
							$scope.loading = false;
						});

				})
				.error(function(data) {
					console.log(data);
				});
		};

		// function to handle deleting a Post
		$scope.deletePost = function(id) {
			$scope.loading = true; 

			Post.destroy(id)
				.success(function(data) {

					// if successful, we'll need to refresh the Post list
					Post.get()
						.success(function(getData) {
							$scope.Posts = getData;
							$scope.loading = false;
						});

				});
		};

	});