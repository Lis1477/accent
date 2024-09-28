@extends('layouts.base')
@section('content')
    <div class="">
        <div>
            <div>
                <h1>
                    Новости
                    {{ (Cookie::get('current_city')) ? 'региона '.json_decode(Cookie::get('current_city'))->name : '' }}
                </h1>

                <div class="text">
                    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias architecto
                        aspernatur atque, beatae cum, dolores dolorum excepturi explicabo inventore ipsum labore minima
                        nulla, repellat veniam. Ab accusamus, adipisci beatae cum et eum magni nisi odio omnis pariatur
                        porro quibusdam sequi voluptatibus. Asperiores, assumenda at autem consequatur cupiditate
                        debitis deserunt doloribus ea eius eligendi enim eum ex facilis ipsam molestiae natus nihil
                        officiis perspiciatis quaerat quam quibusdam, reiciendis reprehenderit saepe tenetur voluptas
                        voluptates voluptatibus! Ab alias aperiam consectetur deserunt dignissimos enim eum ex fuga,
                        fugiat iste nemo odio perspiciatis porro provident quaerat quasi quod quos ratione sed
                        temporibus? Ab accusantium amet aperiam consectetur culpa eaque, labore. Accusantium, ad
                        aspernatur blanditiis consequatur consequuntur culpa cum deserunt ea earum et ex excepturi
                        facere facilis fugiat fugit in ipsa maiores maxime necessitatibus nemo nobis nulla obcaecati
                        odit officiis perferendis quae quia quibusdam quo quod ratione repellendus sapiente soluta
                        suscipit vel veritatis voluptate voluptates. Animi dolore earum, fuga magnam officia rem
                        suscipit voluptates? Aliquam aliquid blanditiis deserunt dolore ducimus facilis harum illo ipsa
                        ipsum iste iure magni maiores numquam placeat sit, soluta vitae. A accusantium delectus
                        dignissimos dolore eaque eligendi eum expedita incidunt nam nemo nesciunt nostrum obcaecati
                        officia optio quis sequi ut, voluptas voluptatibus. Autem cumque debitis doloremque ea eius
                        enim, eos eum excepturi necessitatibus nihil optio possimus provident quaerat quidem quisquam
                        quo quod sapiente sint temporibus unde. Accusantium, repudiandae, sequi! Commodi cum ducimus ea
                        hic illo nobis porro quasi quod vel veritatis? Adipisci aliquid aut blanditiis dicta distinctio
                        dolore itaque laboriosam magni maxime minima molestiae mollitia numquam pariatur praesentium
                        quae sapiente, soluta veritatis voluptate! A ab, amet aperiam architecto consequatur
                        consequuntur cum dolores eius in inventore libero numquam placeat quis sapiente tempora vel
                        voluptas! Aut deserunt dolore, eaque eos error et impedit ipsum magni sequi sunt! Ad adipisci
                        aperiam dolore facere reiciendis!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
