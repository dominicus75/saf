@if (Request::is('students*'))
    @section('class01', 'current')
    @section('class02', '')
@elseif(Request::is('studygroups*'))
    @section('class01', '')
    @section('class02', 'current')
@else
    @section('class01', '')
    @section('class02', '')
@endif

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAF | @yield('title', '')</title>
    <style>
        /* http://meyerweb.com/eric/tools/css/reset/
        v2.0 | 20110126
        License: none (public domain)
        */
        html, body, div, span, h1, h2, h3, h4, h5, h6,
        p, blockquote, pre, a, address, cite, code,
        del, dfn, em, img, strike, strong, sub, sup,
        b, u, i, center, dl, dt, dd, ol, ul, li,
        fieldset, form, label, legend,
        table, caption, tbody, tfoot, thead, tr, th, td,
        main, article, aside, canvas, figure, figcaption,
        footer, header, hgroup, menu, nav, section {
            margin: 0;
            padding: 0;
            border: 0;
            box-sizing: border-box;
        }
        /* HTML5 display-role reset for older browsers */
        article, aside, details, figcaption, figure,
        footer, header, hgroup, menu, nav, section {
            display: block;
        }
        html {
            font-family: "Gill Sans", arial, sans-serif;
            font-size: 2vmin;
            background-color: #e8ecef;
        }
        body {
            line-height: 1;
            padding: 2vh 10vw;
        }
        ol, ul {
            list-style: none;
        }
        blockquote, q {
            quotes: none;
        }
        blockquote:before, blockquote:after,
        q:before, q:after {
            content: '';
            content: none;
        }
        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        /* Common */

        nav ul li { display: inline-block; }
        a {
            text-decoration: none;
            color: black;
            font-weight: bold;
        }
        li.current > a { color: #2cc0d5; }
        a:hover, li.current > a:hover { color: #ed7b3d; }
        li.current > a:hover {  }

        /* Site header */

        header.saf {
            margin-bottom: 2vh;
        }

        img#logo {
            height: 5rem;
        }

        header.saf > p {
            font-size: .8rem;
            color: #9ca8af;
        }

        /* Site navigation */

        ul.site {
            margin-bottom: -1px;
        }

        ul.site li {
            background-color: #f4f7f9;
            border-top: 1px solid #dbe0e4;
            border-right: 1px solid #dbe0e4;
            border-left: 1px solid #dbe0e4;
            border-radius: .5rem .5rem 0 0;
            width: 33%;
            padding: 2rem;
            color: #9ca8af;

        }

        ul.site li.current {
            background-color: #ffffff;
            border-bottom: 1px solid #ffffff;
        }

        /* Main content */

        main {
            background-color: #ffffff;
            border: 1px solid #dbe0e4;
            border-radius: 0 1rem 1rem 1rem;
            padding: 2vmin 5vmax;
        }
@yield('style', '')

        /* Footer */

        footer {
            text-align: center;
            font-size: .75rem;
            line-height: 1.25;
            color: #9ca8af;
            padding: 1rem;
        }

        footer a { color: inherit; }
        footer p {
            text-transform: uppercase;
            font-weight: 600;
        }

    </style>
</head>
<body>
<header class="saf">
    <a href="/"><img src="/img/logo.png" alt="logo" id="logo"></a>
    <p>Student Administration Framework</p>
</header>
<nav>
    <ul class="site">
        <li class="@yield('class01', '')">
            <a href="/students">STUDENTS</a>
            <p>{{ $data['students'] }} students registered</p>
        </li>
        <li class="@yield('class02', '')">
            <a href="/studygroups">STUDY GROUPS</a>
            <p>{{ $data['groups'] }} studygroups with {{ $data['with_students'] }} students</p>
        </li>
    </ul>
</nav>
<main>
@yield('main')
</main>
<footer>
    <p>&copy; New-Western High School, 2021.</p>
    <address itemscope itemtype="https://schema.org/PostalAddress">
        Address: <span itemprop="streetAddress">20341 Whitworth Institute 405 N. Whitworth</span><br>
        <span itemprop="addressLocality">Seattle</span>,
        <span itemprop="addressRegion">WA</span>
        <span itemprop="postalCode">98052</span><br>
        Mail: <a href="mailto:office@new-western.edu" itemprop="email">office@new-western.edu</a><br>
        Phone: <a href="tel:+14251234567" itemprop="telephone">(425) 123-4567</a>
    </address>
</footer>
</body>
</html>
