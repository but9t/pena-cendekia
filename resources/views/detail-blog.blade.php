@extends('layouts.main')

@push('css')
    <style>
        /* Layar Desktop */
        @media screen and (min-width: 1024px){
            .blog-detail{
                width: 100%;
                height: auto;
                margin: auto;
                padding: 0 15rem;
                max-width: 1300px;
            }

            .blog-detail .thumbnail{
                width: 100%;
                height: 25rem;
                object-fit: cover;
            }

            .body{
                text-align: left!important;
                letter-spacing: -0.001em;
            }
        }

        /* Layar Tablet */
        @media screen and (min-width: 768px) and (max-width: 1023px){
            .blog-detail{
                width: 100%;
                height: auto;
                margin: auto;
                padding: 0 5rem;
                max-width: 1300px;
            }

            .blog-detail .thumbnail{
                width: 100%;
                height: 25rem;
                object-fit: cover;
            }

            .body{
                text-align: left!important;
                letter-spacing: -0.001em;
            }

            .body p{
                justify-content: left;
                text-align: left !important;    
            }
        }

        /* Layar Smartphone */
        @media screen and (max-width: 767px){
            .blog-detail{
                width: 100%;
                height: auto;
                margin: auto;
                padding: 0 2rem;
                max-width: 1300px;
            }

            .blog-detail .thumbnail{
                width: 100%;
                height: 25rem;
                object-fit: cover;
            }

            .body{
                text-align: left!important;
                letter-spacing: -0.001em;
            }

            .body p{
                justify-content: left;
                text-align: left !important;    
            }   
        }

        .bg-main{
            background-color: #0095DA;
        }
    </style>
@endpush

@section('home')
    <main>
        <article class="blog-detail mt-5">
            <h1 class="text-start fw-bold">Sejarah Gedung Merdeka: Gedung Yang <span class="bg-main">Mengandung Banyak Cerita Tentang Indonesia</span></h1>
            <div class="d-flex my-3">
                <img src="{{ asset('img/blogger.png') }}" width="35" height="35" alt="">
                <span class="text-muted px-1 py-1">Admin</span>
                <span class="text-muted px-1 py-1">•</span>
                <span class="text-muted px-1 py-1">03 Juni 2023</span>
            </div>
            <figure>
                <img src="{{ asset('img/image-article/1.png') }}" class="thumbnail" alt="">
                <figcaption class="text-muted font-monospace py-1" style="font-size: 10px;">Thumbnail : Gedung Merdeka</figcaption>
            </figure>
            <div class="body lh-lg mt-3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis quam doloremque nostrum ullam animi alias excepturi expedita vero veniam, id in voluptate neque, tenetur possimus exercitationem magni. Aut unde perspiciatis cum ducimus temporibus ipsa veniam minus dolorem explicabo possimus, veritatis accusantium facere. Cupiditate at voluptatum quam assumenda iusto sint itaque officia atque accusamus alias, ipsam hic, quisquam odit iste earum molestiae esse, possimus eum necessitatibus numquam odio id architecto provident. Cum, hic, consequatur mollitia facilis ut ipsa officia provident voluptas, ducimus quidem temporibus! Rerum ex, non labore facere molestiae optio. Doloribus voluptas doloremque laudantium autem sit est soluta minima itaque.</p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis quam doloremque nostrum ullam animi alias excepturi expedita vero veniam, id in voluptate neque, tenetur possimus exercitationem magni. Aut unde perspiciatis cum ducimus temporibus ipsa veniam minus dolorem explicabo possimus, veritatis accusantium facere. Cupiditate at voluptatum quam assumenda iusto sint itaque officia atque accusamus alias, ipsam hic, quisquam odit iste earum molestiae esse, possimus eum necessitatibus numquam odio id architecto provident. Cum, hic, consequatur mollitia facilis ut ipsa officia provident voluptas, ducimus quidem temporibus! Rerum ex, non labore facere molestiae optio. Doloribus voluptas doloremque laudantium autem sit est soluta minima itaque.</p>

                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam architecto non nam tempora, delectus id! Alias atque quae, inventore sit, sint ut itaque maxime libero, tenetur at perferendis esse?</p>

                <ol>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat, sint?</li>
                    <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere, non!</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, quibusdam?</li>
                </ol>

                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti officiis ea, nam pariatur facere quod enim ipsam exercitationem autem porro quia molestiae iusto provident saepe ut sequi repudiandae praesentium mollitia.</p>
            </div>
        </article>
    </main>
@endsection
<!--End Content 4-->