<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    {{ URL::asset('css/base.css');}}
    {{ URL::asset('css/header-footer.css');}}
    <link rel="stylesheet" href="{{ URL::asset('css/reset.css');}}">
    <link rel="stylesheet" href=" {{ URL::asset('css/base.css');}}">
    <link rel="stylesheet" href="./assets/fonts/themify-icons/themify-icons.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

</html>
@extends('layouts.app')
@section('content')
                   
        <div class="container">
            <div class="grid">
                <div class="grid__row">
                    <div class="grid__column-1">
                    </div>
                    <div class="grid__column-10">
                        <div class="container__boxchat clearfix">
                            <div class="people-list" id="people-list">
                                <div class="people-list__title">
                                    <h2>Tin Nhắn</h2>
                                </div>
                                <ul class="list">
                                    <li class="item clearfix">
                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_01.jpg" alt="avatar" />
                                        <div class="about">
                                            <div class="name">Nguyễn Thị Mây</div>
                                            <div class="status">
                                                <i class="ti-comments-smiley online"></i> online
                                            </div>
                                        </div>
                                    </li>

                                    <li class="item clearfix">
                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_02.jpg" alt="avatar" />
                                        <div class="about">
                                            <div class="name">Aiden Chavez</div>
                                            <div class="status">
                                                <i class="ti-comments-smiley offline"></i> left 7 mins ago
                                            </div>
                                        </div>
                                    </li>

                                    <li class="item clearfix">
                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_03.jpg" alt="avatar" />
                                        <div class="about">
                                            <div class="name">Mike Thomas</div>
                                            <div class="status">
                                                <i class="ti-comments-smiley online"></i> online
                                            </div>
                                        </div>
                                    </li>

                                    <li class="item clearfix">
                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_04.jpg" alt="avatar" />
                                        <div class="about">
                                            <div class="name">Erica Hughes</div>
                                            <div class="status">
                                                <i class="ti-comments-smiley online"></i> online
                                            </div>
                                        </div>
                                    </li>

                                    <li class="item clearfix">
                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_05.jpg" alt="avatar" />
                                        <div class="about">
                                            <div class="name">Ginger Johnston</div>
                                            <div class="status">
                                                <i class="ti-comments-smiley online"></i> online
                                            </div>
                                        </div>
                                    </li>

                                    <li class="item clearfix">
                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_06.jpg" alt="avatar" />
                                        <div class="about">
                                            <div class="name">Tracy Carpenter</div>
                                            <div class="status">
                                                <i class="ti-comments-smiley offline"></i> left 30 mins ago
                                            </div>
                                        </div>
                                    </li>

                                    <li class="item clearfix">
                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_07.jpg" alt="avatar" />
                                        <div class="about">
                                            <div class="name">Christian Kelly</div>
                                            <div class="status">
                                                <i class="ti-comments-smiley offline"></i> left 10 hours ago
                                            </div>
                                        </div>
                                    </li>

                                    <li class="item clearfix">
                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_08.jpg" alt="avatar" />
                                        <div class="about">
                                            <div class="name">Monica Ward</div>
                                            <div class="status">
                                                <i class="ti-comments-smiley online"></i> online
                                            </div>
                                        </div>
                                    </li>

                                    <li class="item clearfix">
                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_09.jpg" alt="avatar" />
                                        <div class="about">
                                            <div class="name">Dean Henry</div>
                                            <div class="status">
                                                <i class="ti-comments-smiley offline"></i> offline since Oct 28
                                            </div>
                                        </div>
                                    </li>

                                    <li class="item clearfix">
                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_10.jpg" alt="avatar" />
                                        <div class="about">
                                            <div class="name">Peyton Mckinney</div>
                                            <div class="status">
                                                <i class="ti-comments-smiley online"></i> online
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="chat">
                                <div class="chat-header clearfix">
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_01_green.jpg" alt="avatar" />

                                    <div class="chat-about">
                                        <div class="chat-with">Chat with Vincent Porter</div>
                                        <div class="chat-phonenum">02875949494</div>
                                    </div>
                                </div>
                                <!-- end chat-header -->

                                <div class="chat-history">
                                    <ul>
                                        <li class="clearfix">
                                            <div class="message-data align-right">
                                                <span class="message-data-time">10:10 AM, Today</span> &nbsp; &nbsp;

                                            </div>
                                            <div class="message other-message float-right">
                                                Hi Vincent, how are you? How is the project coming along?
                                            </div>
                                        </li>

                                        <li>
                                            <div class="message-data">
                                                <span class="message-data-time">10:12 AM, Today</span>
                                            </div>
                                            <div class="message my-message">
                                                Are we meeting today? Project has been already finished and I have results to show you.
                                            </div>
                                        </li>

                                        <li class="clearfix">
                                            <div class="message-data align-right">
                                                <span class="message-data-time">10:14 AM, Today</span> &nbsp; &nbsp;

                                            </div>
                                            <div class="message other-message">
                                                Well I am not sure. The rest of the team is not here yet. Maybe in an hour or so? Have you faced any problems at the last phase of the project?
                                            </div>
                                        </li>

                                        <li>
                                            <div class="message-data">
                                                <span class="message-data-time">10:20 AM, Today</span>
                                            </div>
                                            <div class="message my-message">
                                                Actually everything was fine. I'm very excited to show this to our team.
                                            </div>
                                        </li>

                                        <li>
                                            <div class="message-data">
                                                <span class="message-data-name"><i class="fa fa-circle online"></i>
                                                    Vincent</span>
                                                <span class="message-data-time">10:31 AM, Today</span>
                                            </div>
                                            <i class="fa fa-circle online"></i>
                                            <i class="fa fa-circle online" style="color: #AED2A6"></i>
                                            <i class="fa fa-circle online" style="color:#DAE9DA"></i>
                                        </li>

                                    </ul>

                                </div>
                                <!-- end chat-history -->

                                <div class="chat-message clearfix">
                                    <textarea name="message-to-send" id="message-to-send" placeholder="Type your message" rows="3"></textarea>

                                    <i class="fa fa-file-o"></i> &nbsp;&nbsp;&nbsp;
                                    <i class="fa fa-file-image-o"></i>

                                    <button>Send</button>

                                </div>
                                <!-- end chat-message -->

                            </div>
                            <!-- end chat -->

                        </div>
                    </div>
                    <div class="grid__column-1">
                    </div>
                </div>
            </div>
        </div>
        

    <script id="message-template" type="text/x-handlebars-template">
        <li class="clearfix">
            <div class="message-data align-right">
                <span class="message-data-time">time, Today</span> &nbsp; &nbsp;
                <span class="message-data-name">Olia</span> <i class="fa fa-circle me"></i>
            </div>
            <div class="message other-message float-right">
               messageOutput
            </div>
        </li>
    </script>

    <script id="message-response-template" type="text/x-handlebars-template">
        <li>
            <div class="message-data">
                <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
                <span class="message-data-time">time, Today</span>
            </div>
            <div class="message my-message">
                response
            </div>
        </li>
    </script>
    @endsection