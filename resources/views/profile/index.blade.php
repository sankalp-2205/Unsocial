@extends('layouts.app')

@section('content')

<header>

	<div class="container">

		<div class="profile">

			<div class="profile-image">
						<img src="https://images.unsplash.com/photo-1513721032312-6a18a42c8763?w=152&h=152&fit=crop&crop=faces" alt="">
			</div>

			<div class="profile-user-settings">

				<h5 class="profile-user-name">{{$user->username}}</h5>
				<a href = "/p/create" class="btn profile-settings-btn" aria-label="profile settings">+</a>

				<button class="btn profile-edit-btn">Edit Profile</button>

			</div>

			<div class="profile-stats">

				<ul>
					<li><span class="profile-stat-count">{{$user->posts->count()}}</span> posts</li>
					<li><span class="profile-stat-count">188</span> followers</li>
					<li><span class="profile-stat-count">206</span> following</li>
				</ul>

			</div>

			<div class="profile-bio">

				<p><span class="profile-real-name">{{$user->name}}</span></p>
                <p>{{$user->profile->description}}</p>
                <p>{{$user->profile->url}}</p>
			</div>

		</div>
		<!-- End of profile section -->

	</div>
	<!-- End of container -->

</header>

<main>

	<div class="container">

		<div class="gallery">

		@foreach($user->posts as $post)

		<div class="gallery-item" tabindex="0">
		<a href = "/p/{{$post->id}}">
			<img src="/storage/{{$post->image}}" class="gallery-image" alt="">
		</a>

<!-- <div class="gallery-item-info">

	<ul>
		<li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 56</li>
		<li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 2</li>
	</ul>

</div> -->

</div>

		@endforeach

			
		<!-- End of gallery -->

		<!-- <div class="loader"></div>

	</div> -->
	<!-- End of container -->

</main>
@endsection
