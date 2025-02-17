@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Material Dashboard')])

@section('content')
    <style>
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
        }

        body {
            margin: 0;
        }

        main {
            display: block;
        }

        h1 {
            font-size: 2em;
            margin: .67em 0;
        }

        hr {
            box-sizing: content-box;
            height: 0;
            overflow: visible;
        }

        pre {
            font-family: monospace, monospace;
            font-size: 1em;
        }

        a {
            background-color: transparent;
        }

        abbr[title] {
            border-bottom: none;
            text-decoration: underline;
            text-decoration: underline dotted;
        }

        b, strong {
            font-weight: bolder;
        }

        code, kbd, samp {
            font-family: monospace, monospace;
            font-size: 1em;
        }

        small {
            font-size: 80%;
        }

        sub, sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline;
        }

        sub {
            bottom: -.25em;
        }

        sup {
            top: -.5em;
        }

        img {
            border-style: none;
        }

        button, input, optgroup, select, textarea {
            font-family: inherit;
            font-size: 100%;
            line-height: 1.15;
            margin: 0;
        }

        button, input {
            overflow: visible;
        }

        button, select {
            text-transform: none;
        }

        [type=button], [type=reset], [type=submit], button {
            -webkit-appearance: button;
        }

        [type=button]::-moz-focus-inner, [type=reset]::-moz-focus-inner, [type=submit]::-moz-focus-inner, button::-moz-focus-inner {
            border-style: none;
            padding: 0;
        }

        [type=button]:-moz-focusring, [type=reset]:-moz-focusring, [type=submit]:-moz-focusring, button:-moz-focusring {
            outline: 1px dotted ButtonText;
        }

        fieldset {
            padding: .35em .75em .625em;
        }

        legend {
            box-sizing: border-box;
            color: inherit;
            display: table;
            max-width: 100%;
            padding: 0;
            white-space: normal;
        }

        progress {
            vertical-align: baseline;
        }

        textarea {
            overflow: auto;
        }

        [type=checkbox], [type=radio] {
            box-sizing: border-box;
            padding: 0;
        }

        [type=number]::-webkit-inner-spin-button, [type=number]::-webkit-outer-spin-button {
            height: auto;
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px;
        }

        [type=search]::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit;
        }

        details {
            display: block;
        }

        summary {
            display: list-item;
        }

        template {
            display: none;
        }

        [hidden] {
            display: none;
        }

        *, ::after, ::before {
            box-sizing: border-box;
        }

        html {
            font-family: sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            -ms-overflow-style: scrollbar;
            -webkit-tap-highlight-color: transparent;
        }

        @-ms-viewport {
            width: device-width;
        }

        .pre-scrollable {
            max-height: 340px;
            overflow-y: scroll;
        }

        .container {
            width: 100%;
            padding-right: 10px;
            padding-left: 10px;
            margin-right: auto;
            margin-left: auto;
        }

        @media (min-width: 576px) {
            .container {
                max-width: 540px;
            }
        }

        @media (min-width: 768px) {
            .container {
                max-width: 720px;
            }
        }

        @media (min-width: 992px) {
            .container {
                max-width: 960px;
            }
        }

        @media (min-width: 1230px) {
            .container {
                max-width: 1200px;
            }
        }

        .container-fluid {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        .row {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -10px;
            margin-left: -10px;
        }

        .no-gutters {
            margin-right: 0;
            margin-left: 0;
        }

        .no-gutters > .col, .no-gutters > [class*=col-] {
            padding-right: 0;
            padding-left: 0;
        }

        .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-2-5, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-2-5, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-2-5, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-2-5, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-2-5, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 10px;
            padding-left: 10px;
        }

        .col {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%;
        }

        .col-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: none;
        }

        .col-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 8.333333%;
            flex: 0 0 8.333333%;
            max-width: 8.333333%;
        }

        .col-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.666667%;
            flex: 0 0 16.666667%;
            max-width: 16.666667%;
        }

        .col-2-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 20%;
            flex: 0 0 20%;
            max-width: 20%;
        }

        .col-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%;
        }

        .col-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        .col-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 41.666667%;
            flex: 0 0 41.666667%;
            max-width: 41.666667%;
        }

        .col-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col-7 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 58.333333%;
            flex: 0 0 58.333333%;
            max-width: 58.333333%;
        }

        .col-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 66.666667%;
        }

        .col-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%;
        }

        .col-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 83.333333%;
            flex: 0 0 83.333333%;
            max-width: 83.333333%;
        }

        .col-11 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 91.666667%;
            flex: 0 0 91.666667%;
            max-width: 91.666667%;
        }

        .col-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        @media (min-width: 576px) {
            .col-sm {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -webkit-box-flex: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%;
            }

            .col-sm-auto {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: none;
            }

            .col-sm-1 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
                max-width: 8.333333%;
            }

            .col-sm-2 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%;
            }

            .col-sm-2-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 20%;
                flex: 0 0 20%;
                max-width: 20%;
            }

            .col-sm-3 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }

            .col-sm-4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }

            .col-sm-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
                max-width: 41.666667%;
            }

            .col-sm-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }

            .col-sm-7 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%;
            }

            .col-sm-8 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%;
            }

            .col-sm-9 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%;
            }

            .col-sm-10 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
                max-width: 83.333333%;
            }

            .col-sm-11 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 91.666667%;
                flex: 0 0 91.666667%;
                max-width: 91.666667%;
            }

            .col-sm-12 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        @media (min-width: 768px) {
            .col-md {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -webkit-box-flex: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%;
            }

            .col-md-auto {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: none;
            }

            .col-md-1 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
                max-width: 8.333333%;
            }

            .col-md-2 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%;
            }

            .col-md-2-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 20%;
                flex: 0 0 20%;
                max-width: 20%;
            }

            .col-md-3 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }

            .col-md-4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }

            .col-md-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
                max-width: 41.666667%;
            }

            .col-md-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }

            .col-md-7 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%;
            }

            .col-md-8 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%;
            }

            .col-md-9 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%;
            }

            .col-md-10 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
                max-width: 83.333333%;
            }

            .col-md-11 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 91.666667%;
                flex: 0 0 91.666667%;
                max-width: 91.666667%;
            }

            .col-md-12 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        @media (min-width: 992px) {
            .col-lg {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -webkit-box-flex: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%;
            }

            .col-lg-auto {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: none;
            }

            .col-lg-1 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
                max-width: 8.333333%;
            }

            .col-lg-2 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%;
            }

            .col-lg-2-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 20%;
                flex: 0 0 20%;
                max-width: 20%;
            }

            .col-lg-3 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }

            .col-lg-4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }

            .col-lg-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
                max-width: 41.666667%;
            }

            .col-lg-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }

            .col-lg-7 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%;
            }

            .col-lg-8 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%;
            }

            .col-lg-9 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%;
            }

            .col-lg-10 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
                max-width: 83.333333%;
            }

            .col-lg-11 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 91.666667%;
                flex: 0 0 91.666667%;
                max-width: 91.666667%;
            }

            .col-lg-12 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        @media (min-width: 1200px) {
            .col-xl {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -webkit-box-flex: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%;
            }

            .col-xl-auto {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: none;
            }

            .col-xl-1 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
                max-width: 8.333333%;
            }

            .col-xl-2 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%;
            }

            .col-xl-2-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 20%;
                flex: 0 0 20%;
                max-width: 20%;
            }

            .col-xl-3 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }

            .col-xl-4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }

            .col-xl-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
                max-width: 41.666667%;
            }

            .col-xl-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }

            .col-xl-7 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%;
            }

            .col-xl-8 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%;
            }

            .col-xl-9 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%;
            }

            .col-xl-10 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
                max-width: 83.333333%;
            }

            .col-xl-11 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 91.666667%;
                flex: 0 0 91.666667%;
                max-width: 91.666667%;
            }

            .col-xl-12 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        .align-baseline {
            vertical-align: baseline !important;
        }

        .align-top {
            vertical-align: top !important;
        }

        .align-middle {
            vertical-align: middle !important;
        }

        .align-bottom {
            vertical-align: bottom !important;
        }

        .align-text-bottom {
            vertical-align: text-bottom !important;
        }

        .align-text-top {
            vertical-align: text-top !important;
        }

        .text-left {
            text-align: left !important;
        }

        .text-right {
            text-align: right !important;
        }

        .text-center {
            text-align: center !important;
        }

        .text-lowercase {
            text-transform: lowercase !important;
        }

        .text-uppercase {
            text-transform: uppercase !important;
        }

        .text-capitalize {
            text-transform: capitalize !important;
        }

        .visible {
            visibility: visible !important;
        }

        .invisible {
            visibility: hidden !important;
        }

        @media print {
            *, ::after, ::before {
                text-shadow: none !important;
                box-shadow: none !important;
            }

            a:not(.btn) {
                text-decoration: underline;
            }

            abbr[title]::after {
                content: " (" attr(title) ")";
            }

            pre {
                white-space: pre-wrap !important;
            }

            blockquote, pre {
                border: 1px solid #999;
                page-break-inside: avoid;
            }

            thead {
                display: table-header-group;
            }

            img, tr {
                page-break-inside: avoid;
            }

            h2, h3, p {
                orphans: 3;
                widows: 3;
            }

            h2, h3 {
                page-break-after: avoid;
            }

            @page {
                size: a3;
            }

            body {
                min-width: 992px !important;
            }

            .container {
                min-width: 992px !important;
            }

            .navbar {
                display: none;
            }

            .badge {
                border: 1px solid #000;
            }

            .table {
                border-collapse: collapse !important;
            }

            .table td, .table th {
                background-color: white !important;
            }

            .table-bordered td, .table-bordered th {
                border: 1px solid #dddddd !important;
            }
        }

        html, body {
            overflow-x: hidden;
            font: 16px/1.5em Lato, sans-serif;
            color: #333333;
            background: white;
            font-weight: 400;
            font-style: normal;
        }

        a {
            color: #8b8b8b;
            text-decoration: none;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: background 0.3s ease-in-out, border-color 0.3s ease-in-out, color 0.3s ease-in-out;
            -moz-transition: background 0.3s ease-in-out, border-color 0.3s ease-in-out, color 0.3s ease-in-out;
            transition: background 0.3s ease-in-out, border-color 0.3s ease-in-out, color 0.3s ease-in-out;
        }

        a:hover,
        a:focus {
            color: #6bc5b2;
        }

        .row {
            overflow: hidden;
        }

        .container_big {
            max-width: 1810px;
            margin-left: auto;
            margin-right: auto;
        }

        #page_preloader__bg {
            background: #fff;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1000;
            -webkit-transition: opacity .1s ease-in-out .05s, z-index .1s ease-in-out .05s;
            -moz-transition: opacity .1s ease-in-out .05s, z-index .1s ease-in-out .05s;
            transition: opacity .1s ease-in-out .05s, z-index .1s ease-in-out .05s;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        #page_preloader__bg.off {
            opacity: 0;
            z-index: -10;
        }

        #page_preloader__img {
            margin: -32px 0 0 -32px;
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 1001;
            -webkit-transition: transform .2s ease-in-out;
            -moz-transition: transform .2s ease-in-out;
            transition: transform .2s ease-in-out;
            -webkit-transform: scale3d(1, 1, 1);
            -ms-transform: scale3d(1, 1, 1);
            -o-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }

        #page_preloader__img.off {
            -webkit-transform: scale3d(0, 0, 1);
            -ms-transform: scale3d(0, 0, 1);
            -o-transform: scale3d(0, 0, 1);
            transform: scale3d(0, 0, 1);
        }

        h1, h2, h3, h4, h5, h6 {
            font: 30px/1.1em Lato, sans-serif;
            color: #333333;
            font-weight: 900;
            font-style: normal;
            margin-top: 0.5em;
            margin-bottom: 0.5em;
        }

        h1 p, h2 p, h3 p, h4 p, h5 p, h6 p {
            margin: 0;
        }

        h1 {
            font-size: 60px;
            font-weight: bolder;
        }

        h2 {
            font-size: 40px;
            font-weight: bolder;
        }

        h3 {
            font-size: 30px;
            font-weight: bold;
        }

        h4 {
            font-size: 24px;
            font-weight: normal;
        }

        h5 {
            font-size: 18px;
            font-weight: bold;
        }

        h6 {
            font-size: 16px;
            font-weight: bold;
        }

        .page_heading {
            margin: 15px 0 0 0;
            padding-bottom: 10px;
            font-size: 24px;
            font-weight: normal;
            text-align: center;
            letter-spacing: -0.05em;
        }

        fieldset {
            min-width: 0;
            margin: 0;
            padding: 0;
            border: 0;
        }

        legend {
            width: 100%;
            display: block;
            margin-bottom: 20px;
            padding: 0;
            border: 0;
            border-bottom: 1px solid #e5e5e5;
            font-size: 21px;
            line-height: inherit;
            color: #333333;
        }

        label {
            display: inline-block;
            max-width: 100%;
            font-size: 14px;
            color: #555;
        }

        input[type="search"] {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-appearance: none;
        }

        input[type="radio"] {
            margin: 3px 0 0;
            margin-top: 1px \9;
            line-height: normal;
        }

        input[type="checkbox"] {
            margin: 4px 0 0;
            margin-top: 1px \9;
            line-height: normal;
        }

        input[type="file"] {
            display: block;
        }

        input[type="range"] {
            width: 100%;
            display: block;
        }

        input[type=search]::-ms-clear {
            display: none;
            width: 0;
            height: 0;
        }

        input[type=search]::-ms-reveal {
            display: none;
            width: 0;
            height: 0;
        }

        input[type="search"]::-webkit-search-decoration,
        input[type="search"]::-webkit-search-cancel-button,
        input[type="search"]::-webkit-search-results-button,
        input[type="search"]::-webkit-search-results-decoration {
            display: none;
        }

        select[multiple],
        select[size] {
            height: auto;
        }

        input[type="file"]:focus,
        input[type="radio"]:focus,
        input[type="checkbox"]:focus {
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px;
        }

        input[type="password"] {
            padding-right: 35px;
        }

        .file_eye_el {
            position: relative;
            width: 100%;
            display: block;
        }

        .file_eye_el:before {
            position: absolute;
            z-index: 1;
            content: '';
            top: 10px;
            right: 10px;
            width: 20px;
            cursor: pointer;
            height: 14px;
            opacity: 1;
            background: url('data:image/svg+xml;utf8,<svg width="20" height="14" viewBox="0 0 20 14" xmlns="http://www.w3.org/2000/svg"><path d="M19.9 6.6C18.2 2.6 14.3 0 10 0C5.7 0 1.8 2.6 0.2 6.6L0 7L0.2 7.4C1.9 11.4 5.7 14 10.1 14C14.4 14 18.3 11.4 19.9 7.4L20 7L19.9 6.6ZM10 12C6.6 12 3.6 10.1 2.2 7C3.6 3.9 6.6 2 10 2C13.4 2 16.4 3.9 17.8 7C16.4 10.1 13.4 12 10 12Z"/><path d="M10 4C8.4 4 7 5.3 7 7C7 8.7 8.3 10 10 10C11.7 10 13 8.7 13 7C13 5.3 11.7 4 10 4ZM10 8C9.5 8 9 7.6 9 7C9 6.4 9.4 6 10 6C10.6 6 11 6.4 11 7C11 7.6 10.6 8 10 8Z"/></svg>');
        }

        .file_eye_el:after {
            position: absolute;
            z-index: 1;
            content: '';
            top: 7px;
            right: 10px;
            width: 20px;
            height: 20px;
            cursor: pointer;
            opacity: 0;
            background: url('data:image/svg+xml;utf8,<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M20 6.58252L18.0905 6C16.7839 9.68932 13.5678 12.1165 10.0503 12.1165C6.43216 12.1165 3.21608 9.68932 2.01005 6L0 6.58252C0.703518 8.52427 1.80905 10.2718 3.31658 11.534L2.11055 13.5728L3.8191 14.5437L4.92462 12.699C6.13065 13.3786 7.53769 13.8641 8.94472 14.0583V16.0971H10.9548V14.0583C12.3618 13.8641 13.7688 13.4757 14.9749 12.699L16.0804 14.5437L17.7889 13.5728L16.5829 11.534C18.191 10.2718 19.2965 8.62136 20 6.58252Z"/></svg>');
        }

        .file_eye_el.see_text:before {
            opacity: 0;
        }

        .file_eye_el.see_text:after {
            opacity: 1;
        }

        output {
            display: block;
            padding-top: 7px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555555;
        }

        select,
        textarea,
        input[type="tel"],
        input[type="text"],
        input[type="email"],
        input[type="search"],
        input[type="password"],
        .form-control {
            width: 100%;
            height: 34px;
            display: block;
            vertical-align: top;
            padding: 6px 10px;
            background-image: none;
            border-width: 1px;
            border-style: solid;
            line-height: 1.42857143;
            background-color: white;
            border-color: #e1e1e1;
            font-size: 14px;
            color: #333333;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: border-color 0.2s ease-in-out;
            -moz-transition: border-color 0.2s ease-in-out;
            transition: border-color 0.2s ease-in-out;
        }

        select:focus,
        textarea:focus,
        input[type="tel"]:focus,
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="search"]:focus,
        input[type="password"]:focus,
        .form-control:focus {
            border-color: #999;
            outline: 0;
        }

        .form-control::-moz-placeholder {
            color: rgba(0, 0, 0, 0.75);
            opacity: 1;
        }

        .form-control:-ms-input-placeholder {
            color: rgba(0, 0, 0, 0.75);
        }

        .form-control::-webkit-input-placeholder {
            color: rgba(0, 0, 0, 0.75);
        }

        .form-control::-ms-expand {
            background-color: transparent;
            border: 0;
        }

        .form-control[disabled],
        .form-control[readonly],
        fieldset[disabled] .form-control {
            background-color: #eeeeee;
            opacity: 1;
        }

        .form-control[disabled],
        fieldset[disabled] .form-control {
            cursor: not-allowed;
        }

        textarea {
            min-width: 100%;
            max-width: 100%;
            min-height: 100px;
            height: auto;
        }

        @media screen and (-webkit-min-device-pixel-ratio: 0) {
            input[type="date"].form-control,
            input[type="time"].form-control,
            input[type="datetime-local"].form-control,
            input[type="month"].form-control {
                line-height: 34px;
            }
        }

        .form-group {
            margin-top: 15px;
        }

        .form-group:after {
            content: "";
            display: table;
            clear: both;
        }

        .radio,
        .checkbox {
            min-height: 20px;
            display: block;
            position: relative;
        }

        .radio ~ .radio,
        .checkbox ~ .checkbox {
            margin: 7px 0 0 0;
        }

        .radio label,
        .checkbox label {
            min-height: 20px;
            margin-bottom: 0;
            padding-left: 20px;
            font-weight: normal;
            cursor: pointer;
        }

        .radio input[type="radio"],
        .checkbox input[type="checkbox"] {
            margin-top: 4px \9;
            margin-left: -20px;
            position: absolute;
        }

        input[type="radio"][disabled],
        input[type="checkbox"][disabled],
        input[type="radio"].disabled,
        input[type="checkbox"].disabled,
        fieldset[disabled] input[type="radio"],
        fieldset[disabled] input[type="checkbox"] {
            cursor: not-allowed;
        }

        .radio.disabled label,
        .checkbox.disabled label,
        fieldset[disabled] .radio label,
        fieldset[disabled] .checkbox label {
            cursor: not-allowed;
        }

        .help-block {
            display: block;
            margin-top: 7px;
            font-size: 12px;
            color: #737373;
            cursor: default;
        }

        .form-horizontal .form-group {
            margin-left: -15px;
            margin-right: -15px;
        }

        @media (min-width: 768px) {
            .form-horizontal label {
                margin-bottom: 0;
                line-height: 34px;
                text-align: right;
            }
        }

        p.alert-inline {
            padding: 7px 0 0 0;
            font-size: 12px;
            line-height: 1em;
            color: #f00;
        }

        input.alert-inline {
            border-color: #f00;
            color: #f00;
        }

        button,
        .btn,
        .btn_alt,
        .btn_inverted {
            padding: 10px 15px;
            font-size: 14px;
            text-decoration: none;
            display: inline-block;
            vertical-align: middle;
            margin: 0;
            font-weight: bold;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            cursor: pointer;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: background 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out;
            -moz-transition: background 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out;
            transition: background 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.2s ease-in-out;
        }

        .btn {
            background: #6bc5b2;
            border: 2px solid #6bc5b2;
            color: #ffffff;
        }

        .btn svg {
            line-height: 14px;
            margin-right: 5px;
            margin-top: -2px;
            display: inline-block;
            vertical-align: sub;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: all 0.2s ease-in-out;
            -moz-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            fill: #ffffff;
        }

        .btn:active,
        .btn:focus,
        .btn:hover {
            text-decoration: none;
            background: #333333;
            border-color: #333333;
            color: #ffffff;
        }

        .btn:active:not([disabled]) svg,
        .btn:focus:not([disabled]) svg,
        .btn:hover:not([disabled]) svg {
            fill: #ffffff;
        }

        .btn_alt {
            background: #ffffff;
            border: 2px solid #ffffff;
            color: #333333;
        }

        .btn_alt:active,
        .btn_alt:focus,
        .btn_alt:hover {
            background: #6bc5b2;
            border-color: #6bc5b2;
            color: #ffffff;
        }

        .btn_inverted {
            background-color: transparent;
            border: 2px solid #6bc5b2;
            color: #6bc5b2;
        }

        .btn_inverted svg {
            fill: #6bc5b2;
        }

        .btn_inverted:active,
        .btn_inverted:focus,
        .btn_inverted:hover {
            background: #6bc5b2;
            border-color: #6bc5b2;
            color: #ffffff;
        }

        .btn_inverted:hover svg {
            fill: white !important;
        }

        .btn[disabled] {
            background: rgba(0, 0, 0, 0.5);
            border-color: transparent;
            color: white;
        }

        .money_new {
            color: #6bc5b2;
        }

        .btn:focus,
        .btn:active:focus,
        .btn.active:focus,
        .btn.focus,
        .btn:active.focus,
        .btn.active.focus {
            outline: none;
            outline-offset: 0;
        }

        .btn:active,
        .btn:focus,
        .btn:hover,
        .btn.active {
            text-decoration: none;
            background-image: none;
            outline: 0;
        }

        .btn.disabled,
        .btn[disabled],
        fieldset[disabled] .btn {
            cursor: default;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
        }

        a.btn.disabled,
        fieldset[disabled] a.btn {
            pointer-events: none;
        }

        table {
            background-color: transparent;
            border-collapse: collapse;
        }

        table caption {
            padding-top: 8px;
            padding-bottom: 8px;
            font-size: 16px;
            color: #777777;
            text-align: left;
        }

        th {
            text-align: left;
        }

        .table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 20px;
        }

        .table-bordered,
        .table > thead > tr > th,
        .table > tbody > tr > th,
        .table > tfoot > tr > th,
        .table > thead > tr > td,
        .table > tbody > tr > td,
        .table > tfoot > tr > td {
            border-color: #e1e1e1;
        }

        .table > thead > tr > th,
        .table > tbody > tr > th,
        .table > tfoot > tr > th,
        .table > thead > tr > td,
        .table > tbody > tr > td,
        .table > tfoot > tr > td {
            vertical-align: top;
            padding: 8px;
            border-top: 1px solid #e1e1e1;
            line-height: 1.42857143;
        }

        .table > thead > tr > th {
            vertical-align: bottom;
            border-bottom: 2px solid #e1e1e1;
        }

        .table > caption + thead > tr:first-child > th,
        .table > colgroup + thead > tr:first-child > th,
        .table > thead:first-child > tr:first-child > th,
        .table > caption + thead > tr:first-child > td,
        .table > colgroup + thead > tr:first-child > td,
        .table > thead:first-child > tr:first-child > td {
            border-top: 0;
        }

        .table > tbody + tbody {
            border-top: 2px solid #e1e1e1;
        }

        .table .table {
            background-color: white;
        }

        .table-bordered {
            border: 1px solid #e1e1e1;
        }

        .table-bordered > thead > tr > th,
        .table-bordered > tbody > tr > th,
        .table-bordered > tfoot > tr > th,
        .table-bordered > thead > tr > td,
        .table-bordered > tbody > tr > td,
        .table-bordered > tfoot > tr > td {
            border: 1px solid #e1e1e1;
        }

        .table-bordered > thead > tr > th,
        .table-bordered > thead > tr > td {
            border-bottom-width: 2px;
        }

        .table-responsive {
            min-height: 0.01%;
            overflow-x: auto;
        }

        .table-striped > tbody > tr:nth-of-type(odd) {
            background-color: rgba(225, 225, 225, 0.2);
        }

        .table-hover > tbody > tr:hover {
            background-color: rgba(225, 225, 225, 0.2);
        }

        @media screen and (max-width: 767px) {
            .table-responsive {
                width: 100%;
                overflow-y: hidden;
                margin-bottom: 15px;
                border: 1px solid #e1e1e1;
                -ms-overflow-style: -ms-autohiding-scrollbar;
            }

            .table-responsive > .table {
                margin-bottom: 0;
            }

            .table-responsive > .table > thead > tr > th,
            .table-responsive > .table > tbody > tr > th,
            .table-responsive > .table > tfoot > tr > th,
            .table-responsive > .table > thead > tr > td,
            .table-responsive > .table > tbody > tr > td,
            .table-responsive > .table > tfoot > tr > td {
                white-space: nowrap;
            }

            .table-responsive > .table-bordered {
                border: 0;
            }

            .table-responsive > .table-bordered > thead > tr > th:first-child,
            .table-responsive > .table-bordered > tbody > tr > th:first-child,
            .table-responsive > .table-bordered > tfoot > tr > th:first-child,
            .table-responsive > .table-bordered > thead > tr > td:first-child,
            .table-responsive > .table-bordered > tbody > tr > td:first-child,
            .table-responsive > .table-bordered > tfoot > tr > td:first-child {
                border-left: 0;
            }

            .table-responsive > .table-bordered > thead > tr > th:last-child,
            .table-responsive > .table-bordered > tbody > tr > th:last-child,
            .table-responsive > .table-bordered > tfoot > tr > th:last-child,
            .table-responsive > .table-bordered > thead > tr > td:last-child,
            .table-responsive > .table-bordered > tbody > tr > td:last-child,
            .table-responsive > .table-bordered > tfoot > tr > td:last-child {
                border-right: 0;
            }

            .table-responsive > .table-bordered > tbody > tr:last-child > th,
            .table-responsive > .table-bordered > tfoot > tr:last-child > th,
            .table-responsive > .table-bordered > tbody > tr:last-child > td,
            .table-responsive > .table-bordered > tfoot > tr:last-child > td {
                border-bottom: 0;
            }
        }

        select,
        textarea,
        input[type="tel"],
        input[type="text"],
        input[type="email"],
        input[type="search"],
        input[type="password"],
        .form-control,
        .btn,
        .alert,
        .errors {
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }

        .inverted {
            color: white;
        }

        .inverted h1,
        .inverted h2,
        .inverted h3,
        .inverted h4,
        .inverted h5,
        .inverted h6,
        .inverted p,
        .inverted span {
            color: white;
        }

        .errors,
        .alert {
            padding: 10px 15px;
            margin-top: 15px;
            border: 1px solid transparent;
        }

        .errors a,
        .alert a {
            display: inline-block;
            color: inherit;
            text-decoration: underline;
        }

        .errors a:hover,
        .alert a:hover {
            color: inherit;
            text-decoration: none;
        }

        .errors > *,
        .alert > * {
            margin: 0 !important;
        }

        .errors > * ~ *,
        .alert > * ~ * {
            margin: 5px 0 0 0 !important;
        }

        .alert-success {
            background-color: #d0f6b9;
            border-color: #a7e183;
            color: #558638;
        }

        .alert-info {
            background-color: #fff;
            border-color: #9bd6f5;
            color: #437c99;
        }

        .alert-warning {
            background-color: #fff5c3;
            border-color: #edd870;
            color: #85741f;
        }

        .errors,
        .alert-danger {
            background-color: #ffcfcf;
            border-color: #ffa3a3;
            color: #b65353;
        }

        .notify_success {
            color: #0C9712;
        }

        .notify_danger {
            color: #C92C2C;
        }

        .hidden {
            display: none;
            visibility: hidden;
        }

        .rte h1 {
            font-size: 32px;
        }

        .rte h2 {
            font-size: 28px;
        }

        .rte h3 {
            font-size: 26px;
        }

        .rte h4 {
            font-size: 24px;
        }

        .rte h5 {
            font-size: 20px;
        }

        .rte h6 {
            font-size: 18px;
        }

        .rte h1,
        .rte h2,
        .rte h3 {
            margin-top: 25px;
            margin-bottom: 15px;
        }

        .rte h4,
        .rte h5,
        .rte h6 {
            margin-top: 20px;
            margin-bottom: 15px;
        }

        .rte p {
            margin: 15px 0 0 0;
        }

        .rte ul {
            margin: 15px 0 0 0;
            padding: 0 0 0 30px;
            list-style-type: disc;
        }

        .rte ol {
            margin: 15px 0 0 0;
            padding: 0 0 0 30px;
            list-style-type: decimal;
        }

        .rte ul ul,
        .rte ol ul,
        .rte ul ol,
        .rte ol ol {
            margin-top: 0;
        }

        .rte a {
            text-decoration: underline;
        }

        .rte a:hover {
            text-decoration: none;
        }

        .rte blockquote {
            margin: 20px 0;
            padding: 5px 20px;
            border-left: 4px solid #e1e1e1;
            font-size: 16px;
        }

        .rte blockquote b {
            display: block;
            margin: 5px 0 0 0;
            font-weight: bold;
            font-size: 14px;
            line-height: 1.42857143;
            color: #777777;
        }

        .rte blockquote b:before {
            content: "\2014 \00A0";
        }

        .rte blockquote p:first-child,
        .rte blockquote ul:first-child,
        .rte blockquote ol:first-child {
            margin-top: 0;
        }

        .rte q {
            font-style: italic;
        }

        .rte table {
            width: 100%;
            max-width: 100%;
            margin-top: 20px;
            background-color: transparent;
            border-collapse: collapse;
        }

        .rte table th,
        .rte table td {
            vertical-align: middle;
            padding: 7px 10px;
            border: 1px solid #e1e1e1;
        }

        .rte .rte_youtube_wrapper {
            overflow: hidden;
            padding: 56.25% 0 0 0;
            position: relative;
        }

        .rte .rte_youtube_wrapper iframe {
            width: 100%;
            height: 100%;
            border: none;
            position: absolute;
            left: 0;
            top: 0;
        }

        .product_name {
            font-size: 13px;
            color: #333333;
        }

        .product_name a {
            font-size: inherit;
            color: inherit;
        }

        .product_name a:hover {
            color: #6bc5b2;
        }

        .money,
        .money_like {
            font-size: 14px;
            color: #6bc5b2;
        }

        .money_sale {
            text-decoration: line-through;
            margin-right: 5px;
            color: #888888;
        }

        .money_sale_percent {
            margin: 0 5px;
            color: #C92C2C;
        }

        .fancybox-skin {
            padding: 40px !important;
        }

        #product_quick_view {
            width: 800px;
        }

        #product_quick_view .swiper_btn {
            color: #333333;
        }

        #product_quick_view .swiper_btn:hover {
            color: white;
            background: rgba(0, 0, 0, 0.3);
        }

        #product_quick_view .btn_prev {
            left: 0;
        }

        #product_quick_view .btn_prev:after {
            content: "\f104";
            font: 24px/1em "FontAwesome";
            color: inherit;
            line-height: 28px;
        }

        #product_quick_view .btn_next {
            right: 0;
        }

        #product_quick_view .btn_next:after {
            content: "\f105";
            font: 24px/1em "FontAwesome";
            color: inherit;
            line-height: 28px;
        }

        .product_quick_wrapper {
            width: 100%;
            display: table;
        }

        .quick_view__left {
            width: 380px;
            padding: 0;
            position: relative;
        }

        .quick_view__left #img_big {
            width: 100%;
            line-height: 0;
            background: white;
        }

        .quick_view__left .swiper-slide {
            display: inline-block;
            padding: 3px;
        }

        .quick_view__left .swiper-slide img {
            background: white;
            border: 1px solid #e1e1e1;
        }

        .quick_view__left .product_images {
            margin-top: 10px;
        }

        .quick_view__right {
            height: 100%;
            display: table-cell;
            overflow: hidden;
            padding: 0 0 0 38px;
            vertical-align: top;
        }

        .quick_view__right p {
            margin: 5px 0 0 0;
            font-size: 14px;
        }

        .quick_view__right label {
            font-weight: bold;
            font-size: 14px;
            color: black;
        }

        .quick_view__right .quantity_input {
            height: 44px;
            border-radius: 5px;
            width: 100%;
            text-align: left;
            padding: 0 15px;
        }

        .quick_view__right #product_info_link {
            margin-top: 30px;
        }

        #quick_view__name {
            margin: 0;
            font-size: 16px;
            letter-spacing: -0.01em;
            color: #333333;
        }

        #quick_view__variants {
            overflow: hidden;
            margin: 12px -10px 12px -10px;
        }

        #quick_view__variants label {
            display: block;
            padding: 0 10px;
        }

        #quick_view__variants .selector-wrapper {
            width: 33.33333333333333%;
            float: left;
            padding: 3px 10px 0 10px;
        }

        #quick_view__variants .selector-wrapper label {
            display: none !important;
        }

        #quick_view__variants .selector-wrapper select {
            width: 100%;
            display: block;
            padding: 3px 6px;
            height: 30px;
        }

        #quick_view__price {
            margin: 22px 0 0 0;
            position: relative;
        }

        #quick_view__price .price {
            margin: 0;
            padding: 0 60px 0 0;
        }

        #quick_view__price .money {
            margin: 0 7px 0 0;
            font-size: 24px;
            color: #333333;
        }

        #quick_view__price .item_price {
            display: block;
            width: 100%;
            font-weight: 800;
            font-size: 36px;
            color: #6bc5b2;
            letter-spacing: -0.04em;
            margin-bottom: 8px;
        }

        #quick_view__price .money_sale {
            font-size: 16px;
        }

        #quick_view__price .money_sale_percent {
            color: #6bc5b2;
            text-align: center;
            background: none;
            font-size: 17px;
        }

        #quick_view__availability {
            margin: 20px 0 0 0;
        }

        #quick_view__description {
            margin: 15px 0;
            color: #333333;
        }

        #quick_view__description p {
            font-size: 16px;
            line-height: 1.4em;
        }

        #quick_view__form {
            margin: 15px 0 0 0;
        }

        #quick_view__form label {
            display: block;
        }

        #quick_view__form .quantity_box {
            vertical-align: middle;
            height: 44px;
            width: 120px;
        }

        #quick_view__form #quick_view__add {
            height: 44px;
            margin: 0px 10px 0 0;
            padding: 0 20px;
            font-size: 16px;
            font-weight: 800;
            color: white;
            background: #6bc5b2;
        }

        #quick_view__form #quick_view__add:hover {
            color: black;
            background: white;
        }

        #quick_view_colors,
        #quick_view_size {
            display: flex;
            flex-wrap: wrap;
            margin: 12px 0;
        }

        #quick_view_colors label,
        #quick_view_size label {
            margin-right: 3px;
            margin-top: 5px;
            display: block;
            width: 100%;
            line-height: 1.4em;
        }

        #quick_view_colors .color_item,
        #quick_view_size .color_item {
            display: inline-block;
            vertical-align: top;
            width: 30px;
            height: 30px;
            cursor: pointer;
            border: 1px solid transparent;
            padding: 1px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            margin: 5px 9px 0 0;
        }

        #quick_view_colors .color_item span,
        #quick_view_size .color_item span {
            background-color: #474747;
            border: 1px solid #ccc;
            display: block;
            width: 100%;
            height: 100%;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }

        #quick_view_colors .size_item,
        #quick_view_size .size_item {
            display: inline-block;
            vertical-align: baseline;
            margin: 5px 11px 0 0;
            background: white;
            border: 1px solid #e1e1e1;
            text-align: center;
            line-height: 30px;
            min-width: 30px;
            padding: 0 2px;
            cursor: pointer;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }

        #quick_view_colors .current,
        #quick_view_size .current {
            border-color: #333333;
        }

        .fancybox-image,
        .fancybox-inner,
        .fancybox-nav,
        .fancybox-nav span,
        .fancybox-outer,
        .fancybox-skin,
        .fancybox-tmp,
        .fancybox-wrap,
        .fancybox-wrap iframe,
        .fancybox-wrap object {
            padding: 0;
            margin: 0;
            border: 0;
            outline: 0;
            vertical-align: top;
        }

        .fancybox-wrap {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 8020;
        }

        .fancybox-inner,
        .fancybox-outer,
        .fancybox-skin {
            position: relative;
        }

        .fancybox-skin {
            background: #f9f9f9;
            color: #444;
            text-shadow: none;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
        }

        .fancybox-opened {
            z-index: 8030;
        }

        .fancybox-opened .fancybox-skin {
            -webkit-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            -moz-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            background: white;
        }

        .fancybox-inner {
            overflow: hidden;
        }

        .fancybox-type-iframe .fancybox-inner {
            -webkit-overflow-scrolling: touch;
        }

        .fancybox-error {
            color: #444;
            font: 14px/20px "Helvetica Neue", Helvetica, Arial, sans-serif;
            margin: 0;
            padding: 15px;
            white-space: nowrap;
        }

        .fancybox-iframe,
        .fancybox-image {
            display: block;
            width: 100%;
            height: 100%;
        }

        .fancybox-image {
            max-width: 100%;
            max-height: 100%;
        }

        #fancybox-loading {
            position: fixed;
            top: 50%;
            left: 50%;
            margin-top: -22px;
            margin-left: -22px;
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAYAAAAehFoBAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAMhJREFUeNrs2TEKwkAUhOEXBSurQM5jo2AbyG2EgIfyCkKqXEDiGYI2QkBn5aXYYBqb7MAM/Ft/LNutWbwtqtEVDei9UIMbajf93A51CyLn6twWrUwQOq0csTl6EICDMV/jOKG9pb+Nv21rCW53rM1wvFzPsD5zOc1WRjaBBRZYYIEFFlhggQUWWGCBBRZYYIEFFvh/cE/kfQbwnQh8C+ALEfhrLYznU6YY5RUBuJpe98HS/Vg8zr2R8E16Rk0C0MYt0dftR4ABAFfva4h/thfHAAAAAElFTkSuQmCC);
            opacity: 0.8;
            cursor: pointer;
            z-index: 8060;
        }

        .fancybox-close,
        .fancybox-nav,
        .fancybox-nav span {
            cursor: pointer;
            z-index: 8040;
            position: absolute;
        }

        #fancybox-loading div {
            width: 44px;
            height: 44px;
            background: url(fancybox_loading.gif) center center no-repeat;
        }

        .fancybox-close {
            top: -12px;
            right: -12px;
            width: 36px;
            height: 36px;
        }

        .fancybox-nav {
            top: 0;
            width: 40%;
            height: 100%;
            text-decoration: none;
            background: url(blank.gif);
            -webkit-tap-highlight-color: transparent;
        }

        .fancybox-prev {
            left: 0;
        }

        .fancybox-next {
            right: 0;
        }

        .fancybox-nav span {
            top: 50%;
            width: 36px;
            height: 34px;
            margin-top: -18px;
        }

        .fancybox-prev span {
            left: 5px;
        }

        .fancybox-next span {
            right: 5px;
        }

        .fancybox-nav:hover span {
            visibility: visible;
        }

        .fancybox-tmp {
            position: absolute;
            top: -99999px;
            left: -99999px;
            visibility: hidden;
            max-width: 99999px;
            max-height: 99999px;
            overflow: visible !important;
        }

        .fancybox-lock,
        .fancybox-lock body {
            overflow: hidden !important;
        }

        .fancybox-lock {
            width: auto;
        }

        .fancybox-lock-test {
            overflow-y: hidden !important;
        }

        .fancybox-overlay {
            width: 100% !important;
            height: 100% !important;
            position: absolute;
            top: 0;
            left: 0;
            overflow: hidden;
            display: none;
            z-index: 8010;
            background: rgba(0, 0, 0, 0.7);
        }

        .fancybox-overlay-fixed {
            position: fixed;
            bottom: 0;
            right: 0;
        }

        .fancybox-lock .fancybox-overlay {
            overflow: auto;
            overflow-y: scroll;
        }

        .fancybox-title {
            visibility: hidden;
            font: 400 13px/20px "Helvetica Neue", Helvetica, Arial, sans-serif;
            position: relative;
            text-shadow: none;
            z-index: 8050;
        }

        .fancybox-opened .fancybox-title {
            visibility: visible;
        }

        .fancybox-title-float-wrap {
            position: absolute;
            bottom: 0;
            right: 50%;
            margin-bottom: -35px;
            z-index: 8050;
            text-align: center;
        }

        .fancybox-title-float-wrap .child {
            display: inline-block;
            margin-right: -100%;
            padding: 2px 20px;
            background: 0 0;
            background: rgba(0, 0, 0, 0.8);
            -webkit-border-radius: 15px;
            -moz-border-radius: 15px;
            border-radius: 15px;
            text-shadow: 0 1px 2px #222;
            color: #fff;
            font-weight: 700;
            line-height: 24px;
            white-space: nowrap;
        }

        .fancybox-title-outside-wrap {
            position: relative;
            margin-top: 10px;
            color: #fff;
        }

        .fancybox-title-inside-wrap {
            padding-top: 10px;
        }

        .fancybox-title-over-wrap {
            position: absolute;
            bottom: 0;
            left: 0;
            color: #fff;
            padding: 10px;
            background: #000;
            background: rgba(0, 0, 0, 0.8);
        }

        .fancybox-skin {
            padding: 15px;
            background: white;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
        }

        .fancybox-close {
            width: 24px;
            height: 24px;
            display: block;
            border: none;
            background: black;
            border-radius: 5px;
        }

        .fancybox-close:before {
            content: "";
            display: block;
            width: 13px;
            height: 1px;
            background: white;
            position: absolute;
            top: 12px;
            right: 5px;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .fancybox-close:after {
            content: "";
            display: block;
            width: 13px;
            height: 1px;
            background: white;
            position: absolute;
            top: 12px;
            right: 5px;
            -webkit-transform: rotate(135deg);
            transform: rotate(135deg);
        }

        .fancybox-close:hover {
            background: #eee;
        }

        .fancybox-close:hover:before, .fancybox-close:hover:after {
            background: black;
        }

        .fancybox-nav span {
            width: 36px;
            height: 36px;
            display: block;
            margin: -18px 0 0 0;
            background: #444;
            border: none;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.6);
            -moz-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.6);
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.6);
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: background 0.3s ease-in-out, border-color 0.3s ease-in-out, color 0.3s ease-in-out;
            -moz-transition: background 0.3s ease-in-out, border-color 0.3s ease-in-out, color 0.3s ease-in-out;
            transition: background 0.3s ease-in-out, border-color 0.3s ease-in-out, color 0.3s ease-in-out;
        }

        .fancybox-nav span:before {
            display: block;
            font: 12px/36px "FontAwesome";
            color: black;
            text-align: center;
        }

        .fancybox-nav:hover > span {
            background: #666;
        }

        .fancybox-prev span:before {
            content: "\f053";
            padding: 0 2px 0 0;
        }

        .fancybox-next span:before {
            content: "\f054";
            padding: 0 0 0 2px;
        }

        .fancybox_alert {
            padding: 0 !important;
            text-align: center;
        }

        .fancybox_alert .alert {
            margin: 0;
            padding: 40px;
            font-size: 14px;
        }

        .fancybox_alert .btn {
            margin: 15px 0 0 0;
            text-decoration: none;
        }

        .fancybox_alert .btn ~ .btn {
            margin-left: 15px !important;
        }

        #cart_added {
            width: 380px;
            height: 366px;
        }

        #cart_added .cart_added__row {
            display: flex;
            flex-wrap: wrap;
            padding: 15px 0 10px;
        }

        #cart_added h4 {
            margin: -2px 0 0;
            color: #349E53;
            font-size: 15px;
            letter-spacing: -0.015em;
            font-weight: bold;
        }

        #cart_added h4 svg {
            display: inline-block;
            vertical-align: bottom;
        }

        #cart_added.cart_error {
            max-width: 380px;
        }

        .cart_added__1 {
            width: 140px;
            height: 100%;
            text-align: center;
            vertical-align: top;
            line-height: 0;
        }

        .cart_added__1 img {
            max-width: 100%;
        }

        .cart_added__2 {
            width: 240px;
            padding: 0 0 0 29px;
        }

        .cart_added__2 .product_name {
            display: block;
            line-height: 21px;
            letter-spacing: 0.015em;
        }

        .cart_added__2 #cart_added__quantity {
            margin: 5px 0 0 0;
            font-size: 13px;
        }

        .cart_added__2 .product_price {
            font-size: 17px;
            font-weight: bold;
        }

        .cart_added__2 #cart_added__total_quantity {
            margin: 8px 0 0;
            font-size: 13px;
            letter-spacing: -0.015em;
        }

        .cart_added__2 #cart_added__total_price {
            font-size: 13px;
            margin: 7px 0 5px;
        }

        .cart_added__2 #cart_added__total_price span {
            font-weight: bold;
        }

        .cart_added__3 {
            width: 100%;
            padding-top: 15px;
        }

        .cart_added__3 .btn {
            width: 100%;
            margin: 12px 0 0;
        }

        #newsletter_popup {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 400px;
        }

        #newsletter_popup .newsletter_popup_text {
            text-align: center;
        }

        #newsletter_popup .newsletter_popup_text h4 {
            margin-bottom: 15px;
        }

        #newsletter_popup .newsletter_popup_text input {
            height: 40px;
        }

        #newsletter_popup .newsletter_popup_text p {
            margin-bottom: 10px;
        }

        #newsletter_popup .newsletter_popup_text .btn {
            margin-top: 15px;
        }

        @font-face {
            font-family: FontAwesome;
            src: url("//cdn.shopify.com/s/files/1/0414/1950/5826/t/2/assets/fontawesome-webfont.eot?v=4.6.3&v=2765359163389508899");
            src: url("//cdn.shopify.com/s/files/1/0414/1950/5826/t/2/assets/fontawesome-webfont.eot?%23iefix&v=4.6.3&v=2765359163389508899") format("embedded-opentype"), url("//cdn.shopify.com/s/files/1/0414/1950/5826/t/2/assets/fontawesome-webfont.woff2?v=4.6.3&v=9268755437025657397") format("woff2"), url("//cdn.shopify.com/s/files/1/0414/1950/5826/t/2/assets/fontawesome-webfont.woff?v=4.6.3&v=13565676698527024801") format("woff"), url("//cdn.shopify.com/s/files/1/0414/1950/5826/t/2/assets/fontawesome-webfont.ttf?v=4.6.3&v=3855960073533249468") format("truetype"), url("//cdn.shopify.com/s/files/1/0414/1950/5826/t/2/assets/fontawesome-webfont.svg?v=4.6.3%23fontawesomeregular&v=16510168586047339464") format("svg");
            font-weight: 400;
            font-style: normal;
        }

        .fa {
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .fa-lg {
            font-size: 1.33333333em;
            line-height: .75em;
            vertical-align: -15%;
        }

        .fa-2x {
            font-size: 2em;
        }

        .fa-3x {
            font-size: 3em;
        }

        .fa-4x {
            font-size: 4em;
        }

        .fa-5x {
            font-size: 5em;
        }

        .fa-fw {
            width: 1.28571429em;
            text-align: center;
        }

        .fa-ul {
            padding-left: 0;
            margin-left: 2.14285714em;
            list-style-type: none;
        }

        .fa-ul > li {
            position: relative;
        }

        .fa-li {
            position: absolute;
            left: -2.14285714em;
            width: 2.14285714em;
            top: .14285714em;
            text-align: center;
        }

        .fa-li.fa-lg {
            left: -1.85714286em;
        }

        .fa-border {
            padding: .2em .25em .15em;
            border: solid .08em #eee;
            border-radius: .1em;
        }

        .fa-pull-left {
            float: left;
        }

        .fa-pull-right {
            float: right;
        }

        .fa.fa-pull-left {
            margin-right: .3em;
        }

        .fa.fa-pull-right {
            margin-left: .3em;
        }

        .pull-right {
            float: right;
        }

        .pull-left {
            float: left;
        }

        .fa.pull-left {
            margin-right: .3em;
        }

        .fa.pull-right {
            margin-left: .3em;
        }

        .fa-spin {
            -webkit-animation: fa-spin 2s infinite linear;
            animation: fa-spin 2s infinite linear;
        }

        .fa-pulse {
            -webkit-animation: fa-spin 1s infinite steps(8);
            animation: fa-spin 1s infinite steps(8);
        }

        @-webkit-keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            100% {
                -webkit-transform: rotate(359deg);
                transform: rotate(359deg);
            }
        }

        @keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            100% {
                -webkit-transform: rotate(359deg);
                transform: rotate(359deg);
            }
        }

        .fa-rotate-90 {
            -webkit-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        .fa-rotate-180 {
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        .fa-rotate-270 {
            -webkit-transform: rotate(270deg);
            -ms-transform: rotate(270deg);
            transform: rotate(270deg);
        }

        .fa-flip-horizontal {
            -webkit-transform: scale(-1, 1);
            -ms-transform: scale(-1, 1);
            transform: scale(-1, 1);
        }

        .fa-flip-vertical {
            -webkit-transform: scale(1, -1);
            -ms-transform: scale(1, -1);
            transform: scale(1, -1);
        }

        :root .fa-flip-horizontal, :root .fa-flip-vertical, :root .fa-rotate-180, :root .fa-rotate-270, :root .fa-rotate-90 {
            filter: none;
        }

        .fa-stack {
            position: relative;
            display: inline-block;
            width: 2em;
            height: 2em;
            line-height: 2em;
            vertical-align: middle;
        }

        .fa-stack-1x, .fa-stack-2x {
            position: absolute;
            left: 0;
            width: 100%;
            text-align: center;
        }

        .fa-stack-1x {
            line-height: inherit;
        }

        .fa-stack-2x {
            font-size: 2em;
        }

        .fa-inverse {
            color: #fff;
        }

        .fa-glass:before {
            content: "\f000";
        }

        .fa-music:before {
            content: "\f001";
        }

        .fa-search:before {
            content: "\f002";
        }

        .fa-envelope-o:before {
            content: "\f003";
        }

        .fa-heart:before {
            content: "\f004";
        }

        .fa-star:before {
            content: "\f005";
        }

        .fa-star-o:before {
            content: "\f006";
        }

        .fa-user:before {
            content: "\f007";
        }

        .fa-film:before {
            content: "\f008";
        }

        .fa-th-large:before {
            content: "\f009";
        }

        .fa-th:before {
            content: "\f00a";
        }

        .fa-th-list:before {
            content: "\f00b";
        }

        .fa-check:before {
            content: "\f00c";
        }

        .fa-close:before, .fa-remove:before, .fa-times:before {
            content: "\f00d";
        }

        .fa-search-plus:before {
            content: "\f00e";
        }

        .fa-search-minus:before {
            content: "\f010";
        }

        .fa-power-off:before {
            content: "\f011";
        }

        .fa-signal:before {
            content: "\f012";
        }

        .fa-cog:before, .fa-gear:before {
            content: "\f013";
        }

        .fa-trash-o:before {
            content: "\f014";
        }

        .fa-home:before {
            content: "\f015";
        }

        .fa-file-o:before {
            content: "\f016";
        }

        .fa-clock-o:before {
            content: "\f017";
        }

        .fa-road:before {
            content: "\f018";
        }

        .fa-download:before {
            content: "\f019";
        }

        .fa-arrow-circle-o-down:before {
            content: "\f01a";
        }

        .fa-arrow-circle-o-up:before {
            content: "\f01b";
        }

        .fa-inbox:before {
            content: "\f01c";
        }

        .fa-play-circle-o:before {
            content: "\f01d";
        }

        .fa-repeat:before, .fa-rotate-right:before {
            content: "\f01e";
        }

        .fa-refresh:before {
            content: "\f021";
        }

        .fa-list-alt:before {
            content: "\f022";
        }

        .fa-lock:before {
            content: "\f023";
        }

        .fa-flag:before {
            content: "\f024";
        }

        .fa-headphones:before {
            content: "\f025";
        }

        .fa-volume-off:before {
            content: "\f026";
        }

        .fa-volume-down:before {
            content: "\f027";
        }

        .fa-volume-up:before {
            content: "\f028";
        }

        .fa-qrcode:before {
            content: "\f029";
        }

        .fa-barcode:before {
            content: "\f02a";
        }

        .fa-tag:before {
            content: "\f02b";
        }

        .fa-tags:before {
            content: "\f02c";
        }

        .fa-book:before {
            content: "\f02d";
        }

        .fa-bookmark:before {
            content: "\f02e";
        }

        .fa-print:before {
            content: "\f02f";
        }

        .fa-camera:before {
            content: "\f030";
        }

        .fa-font:before {
            content: "\f031";
        }

        .fa-bold:before {
            content: "\f032";
        }

        .fa-italic:before {
            content: "\f033";
        }

        .fa-text-height:before {
            content: "\f034";
        }

        .fa-text-width:before {
            content: "\f035";
        }

        .fa-align-left:before {
            content: "\f036";
        }

        .fa-align-center:before {
            content: "\f037";
        }

        .fa-align-right:before {
            content: "\f038";
        }

        .fa-align-justify:before {
            content: "\f039";
        }

        .fa-list:before {
            content: "\f03a";
        }

        .fa-dedent:before, .fa-outdent:before {
            content: "\f03b";
        }

        .fa-indent:before {
            content: "\f03c";
        }

        .fa-video-camera:before {
            content: "\f03d";
        }

        .fa-image:before, .fa-photo:before, .fa-picture-o:before {
            content: "\f03e";
        }

        .fa-pencil:before {
            content: "\f040";
        }

        .fa-map-marker:before {
            content: "\f041";
        }

        .fa-adjust:before {
            content: "\f042";
        }

        .fa-tint:before {
            content: "\f043";
        }

        .fa-edit:before, .fa-pencil-square-o:before {
            content: "\f044";
        }

        .fa-share-square-o:before {
            content: "\f045";
        }

        .fa-check-square-o:before {
            content: "\f046";
        }

        .fa-arrows:before {
            content: "\f047";
        }

        .fa-step-backward:before {
            content: "\f048";
        }

        .fa-fast-backward:before {
            content: "\f049";
        }

        .fa-backward:before {
            content: "\f04a";
        }

        .fa-play:before {
            content: "\f04b";
        }

        .fa-pause:before {
            content: "\f04c";
        }

        .fa-stop:before {
            content: "\f04d";
        }

        .fa-forward:before {
            content: "\f04e";
        }

        .fa-fast-forward:before {
            content: "\f050";
        }

        .fa-step-forward:before {
            content: "\f051";
        }

        .fa-eject:before {
            content: "\f052";
        }

        .fa-chevron-left:before {
            content: "\f053";
        }

        .fa-chevron-right:before {
            content: "\f054";
        }

        .fa-plus-circle:before {
            content: "\f055";
        }

        .fa-minus-circle:before {
            content: "\f056";
        }

        .fa-times-circle:before {
            content: "\f057";
        }

        .fa-check-circle:before {
            content: "\f058";
        }

        .fa-question-circle:before {
            content: "\f059";
        }

        .fa-info-circle:before {
            content: "\f05a";
        }

        .fa-crosshairs:before {
            content: "\f05b";
        }

        .fa-times-circle-o:before {
            content: "\f05c";
        }

        .fa-check-circle-o:before {
            content: "\f05d";
        }

        .fa-ban:before {
            content: "\f05e";
        }

        .fa-arrow-left:before {
            content: "\f060";
        }

        .fa-arrow-right:before {
            content: "\f061";
        }

        .fa-arrow-up:before {
            content: "\f062";
        }

        .fa-arrow-down:before {
            content: "\f063";
        }

        .fa-mail-forward:before, .fa-share:before {
            content: "\f064";
        }

        .fa-expand:before {
            content: "\f065";
        }

        .fa-compress:before {
            content: "\f066";
        }

        .fa-plus:before {
            content: "\f067";
        }

        .fa-minus:before {
            content: "\f068";
        }

        .fa-asterisk:before {
            content: "\f069";
        }

        .fa-exclamation-circle:before {
            content: "\f06a";
        }

        .fa-gift:before {
            content: "\f06b";
        }

        .fa-leaf:before {
            content: "\f06c";
        }

        .fa-fire:before {
            content: "\f06d";
        }

        .fa-eye:before {
            content: "\f06e";
        }

        .fa-eye-slash:before {
            content: "\f070";
        }

        .fa-exclamation-triangle:before, .fa-warning:before {
            content: "\f071";
        }

        .fa-plane:before {
            content: "\f072";
        }

        .fa-calendar:before {
            content: "\f073";
        }

        .fa-random:before {
            content: "\f074";
        }

        .fa-comment:before {
            content: "\f075";
        }

        .fa-magnet:before {
            content: "\f076";
        }

        .fa-chevron-up:before {
            content: "\f077";
        }

        .fa-chevron-down:before {
            content: "\f078";
        }

        .fa-retweet:before {
            content: "\f079";
        }

        .fa-shopping-cart:before {
            content: "\f07a";
        }

        .fa-folder:before {
            content: "\f07b";
        }

        .fa-folder-open:before {
            content: "\f07c";
        }

        .fa-arrows-v:before {
            content: "\f07d";
        }

        .fa-arrows-h:before {
            content: "\f07e";
        }

        .fa-bar-chart-o:before, .fa-bar-chart:before {
            content: "\f080";
        }

        .fa-twitter-square:before {
            content: "\f081";
        }

        .fa-facebook-square:before {
            content: "\f082";
        }

        .fa-camera-retro:before {
            content: "\f083";
        }

        .fa-key:before {
            content: "\f084";
        }

        .fa-cogs:before, .fa-gears:before {
            content: "\f085";
        }

        .fa-comments:before {
            content: "\f086";
        }

        .fa-thumbs-o-up:before {
            content: "\f087";
        }

        .fa-thumbs-o-down:before {
            content: "\f088";
        }

        .fa-star-half:before {
            content: "\f089";
        }

        .fa-heart-o:before {
            content: "\f08a";
        }

        .fa-sign-out:before {
            content: "\f08b";
        }

        .fa-linkedin-square:before {
            content: "\f08c";
        }

        .fa-thumb-tack:before {
            content: "\f08d";
        }

        .fa-external-link:before {
            content: "\f08e";
        }

        .fa-sign-in:before {
            content: "\f090";
        }

        .fa-trophy:before {
            content: "\f091";
        }

        .fa-github-square:before {
            content: "\f092";
        }

        .fa-upload:before {
            content: "\f093";
        }

        .fa-lemon-o:before {
            content: "\f094";
        }

        .fa-phone:before {
            content: "\f095";
        }

        .fa-square-o:before {
            content: "\f096";
        }

        .fa-bookmark-o:before {
            content: "\f097";
        }

        .fa-phone-square:before {
            content: "\f098";
        }

        .fa-twitter:before {
            content: "\f099";
        }

        .fa-facebook-f:before, .fa-facebook:before {
            content: "\f09a";
        }

        .fa-github:before {
            content: "\f09b";
        }

        .fa-unlock:before {
            content: "\f09c";
        }

        .fa-credit-card:before {
            content: "\f09d";
        }

        .fa-feed:before, .fa-rss:before {
            content: "\f09e";
        }

        .fa-hdd-o:before {
            content: "\f0a0";
        }

        .fa-bullhorn:before {
            content: "\f0a1";
        }

        .fa-bell:before {
            content: "\f0f3";
        }

        .fa-certificate:before {
            content: "\f0a3";
        }

        .fa-hand-o-right:before {
            content: "\f0a4";
        }

        .fa-hand-o-left:before {
            content: "\f0a5";
        }

        .fa-hand-o-up:before {
            content: "\f0a6";
        }

        .fa-hand-o-down:before {
            content: "\f0a7";
        }

        .fa-arrow-circle-left:before {
            content: "\f0a8";
        }

        .fa-arrow-circle-right:before {
            content: "\f0a9";
        }

        .fa-arrow-circle-up:before {
            content: "\f0aa";
        }

        .fa-arrow-circle-down:before {
            content: "\f0ab";
        }

        .fa-globe:before {
            content: "\f0ac";
        }

        .fa-wrench:before {
            content: "\f0ad";
        }

        .fa-tasks:before {
            content: "\f0ae";
        }

        .fa-filter:before {
            content: "\f0b0";
        }

        .fa-briefcase:before {
            content: "\f0b1";
        }

        .fa-arrows-alt:before {
            content: "\f0b2";
        }

        .fa-group:before, .fa-users:before {
            content: "\f0c0";
        }

        .fa-chain:before, .fa-link:before {
            content: "\f0c1";
        }

        .fa-cloud:before {
            content: "\f0c2";
        }

        .fa-flask:before {
            content: "\f0c3";
        }

        .fa-cut:before, .fa-scissors:before {
            content: "\f0c4";
        }

        .fa-copy:before, .fa-files-o:before {
            content: "\f0c5";
        }

        .fa-paperclip:before {
            content: "\f0c6";
        }

        .fa-floppy-o:before, .fa-save:before {
            content: "\f0c7";
        }

        .fa-square:before {
            content: "\f0c8";
        }

        .fa-bars:before, .fa-navicon:before, .fa-reorder:before {
            content: "\f0c9";
        }

        .fa-list-ul:before {
            content: "\f0ca";
        }

        .fa-list-ol:before {
            content: "\f0cb";
        }

        .fa-strikethrough:before {
            content: "\f0cc";
        }

        .fa-underline:before {
            content: "\f0cd";
        }

        .fa-table:before {
            content: "\f0ce";
        }

        .fa-magic:before {
            content: "\f0d0";
        }

        .fa-truck:before {
            content: "\f0d1";
        }

        .fa-pinterest:before {
            content: "\f0d2";
        }

        .fa-pinterest-square:before {
            content: "\f0d3";
        }

        .fa-google-plus-square:before {
            content: "\f0d4";
        }

        .fa-google-plus:before {
            content: "\f0d5";
        }

        .fa-money:before {
            content: "\f0d6";
        }

        .fa-caret-down:before {
            content: "\f0d7";
        }

        .fa-caret-up:before {
            content: "\f0d8";
        }

        .fa-caret-left:before {
            content: "\f0d9";
        }

        .fa-caret-right:before {
            content: "\f0da";
        }

        .fa-columns:before {
            content: "\f0db";
        }

        .fa-sort:before, .fa-unsorted:before {
            content: "\f0dc";
        }

        .fa-sort-desc:before, .fa-sort-down:before {
            content: "\f0dd";
        }

        .fa-sort-asc:before, .fa-sort-up:before {
            content: "\f0de";
        }

        .fa-envelope:before {
            content: "\f0e0";
        }

        .fa-linkedin:before {
            content: "\f0e1";
        }

        .fa-rotate-left:before, .fa-undo:before {
            content: "\f0e2";
        }

        .fa-gavel:before, .fa-legal:before {
            content: "\f0e3";
        }

        .fa-dashboard:before, .fa-tachometer:before {
            content: "\f0e4";
        }

        .fa-comment-o:before {
            content: "\f0e5";
        }

        .fa-comments-o:before {
            content: "\f0e6";
        }

        .fa-bolt:before, .fa-flash:before {
            content: "\f0e7";
        }

        .fa-sitemap:before {
            content: "\f0e8";
        }

        .fa-umbrella:before {
            content: "\f0e9";
        }

        .fa-clipboard:before, .fa-paste:before {
            content: "\f0ea";
        }

        .fa-lightbulb-o:before {
            content: "\f0eb";
        }

        .fa-exchange:before {
            content: "\f0ec";
        }

        .fa-cloud-download:before {
            content: "\f0ed";
        }

        .fa-cloud-upload:before {
            content: "\f0ee";
        }

        .fa-user-md:before {
            content: "\f0f0";
        }

        .fa-stethoscope:before {
            content: "\f0f1";
        }

        .fa-suitcase:before {
            content: "\f0f2";
        }

        .fa-bell-o:before {
            content: "\f0a2";
        }

        .fa-coffee:before {
            content: "\f0f4";
        }

        .fa-cutlery:before {
            content: "\f0f5";
        }

        .fa-file-text-o:before {
            content: "\f0f6";
        }

        .fa-building-o:before {
            content: "\f0f7";
        }

        .fa-hospital-o:before {
            content: "\f0f8";
        }

        .fa-ambulance:before {
            content: "\f0f9";
        }

        .fa-medkit:before {
            content: "\f0fa";
        }

        .fa-fighter-jet:before {
            content: "\f0fb";
        }

        .fa-beer:before {
            content: "\f0fc";
        }

        .fa-h-square:before {
            content: "\f0fd";
        }

        .fa-plus-square:before {
            content: "\f0fe";
        }

        .fa-angle-double-left:before {
            content: "\f100";
        }

        .fa-angle-double-right:before {
            content: "\f101";
        }

        .fa-angle-double-up:before {
            content: "\f102";
        }

        .fa-angle-double-down:before {
            content: "\f103";
        }

        .fa-angle-left:before {
            content: "\f104";
        }

        .fa-angle-right:before {
            content: "\f105";
        }

        .fa-angle-up:before {
            content: "\f106";
        }

        .fa-angle-down:before {
            content: "\f107";
        }

        .fa-desktop:before {
            content: "\f108";
        }

        .fa-laptop:before {
            content: "\f109";
        }

        .fa-tablet:before {
            content: "\f10a";
        }

        .fa-mobile-phone:before, .fa-mobile:before {
            content: "\f10b";
        }

        .fa-circle-o:before {
            content: "\f10c";
        }

        .fa-quote-left:before {
            content: "\f10d";
        }

        .fa-quote-right:before {
            content: "\f10e";
        }

        .fa-spinner:before {
            content: "\f110";
        }

        .fa-circle:before {
            content: "\f111";
        }

        .fa-mail-reply:before, .fa-reply:before {
            content: "\f112";
        }

        .fa-github-alt:before {
            content: "\f113";
        }

        .fa-folder-o:before {
            content: "\f114";
        }

        .fa-folder-open-o:before {
            content: "\f115";
        }

        .fa-smile-o:before {
            content: "\f118";
        }

        .fa-frown-o:before {
            content: "\f119";
        }

        .fa-meh-o:before {
            content: "\f11a";
        }

        .fa-gamepad:before {
            content: "\f11b";
        }

        .fa-keyboard-o:before {
            content: "\f11c";
        }

        .fa-flag-o:before {
            content: "\f11d";
        }

        .fa-flag-checkered:before {
            content: "\f11e";
        }

        .fa-terminal:before {
            content: "\f120";
        }

        .fa-code:before {
            content: "\f121";
        }

        .fa-mail-reply-all:before, .fa-reply-all:before {
            content: "\f122";
        }

        .fa-star-half-empty:before, .fa-star-half-full:before, .fa-star-half-o:before {
            content: "\f123";
        }

        .fa-location-arrow:before {
            content: "\f124";
        }

        .fa-crop:before {
            content: "\f125";
        }

        .fa-code-fork:before {
            content: "\f126";
        }

        .fa-chain-broken:before, .fa-unlink:before {
            content: "\f127";
        }

        .fa-question:before {
            content: "\f128";
        }

        .fa-info:before {
            content: "\f129";
        }

        .fa-exclamation:before {
            content: "\f12a";
        }

        .fa-superscript:before {
            content: "\f12b";
        }

        .fa-subscript:before {
            content: "\f12c";
        }

        .fa-eraser:before {
            content: "\f12d";
        }

        .fa-puzzle-piece:before {
            content: "\f12e";
        }

        .fa-microphone:before {
            content: "\f130";
        }

        .fa-microphone-slash:before {
            content: "\f131";
        }

        .fa-shield:before {
            content: "\f132";
        }

        .fa-calendar-o:before {
            content: "\f133";
        }

        .fa-fire-extinguisher:before {
            content: "\f134";
        }

        .fa-rocket:before {
            content: "\f135";
        }

        .fa-maxcdn:before {
            content: "\f136";
        }

        .fa-chevron-circle-left:before {
            content: "\f137";
        }

        .fa-chevron-circle-right:before {
            content: "\f138";
        }

        .fa-chevron-circle-up:before {
            content: "\f139";
        }

        .fa-chevron-circle-down:before {
            content: "\f13a";
        }

        .fa-html5:before {
            content: "\f13b";
        }

        .fa-css3:before {
            content: "\f13c";
        }

        .fa-anchor:before {
            content: "\f13d";
        }

        .fa-unlock-alt:before {
            content: "\f13e";
        }

        .fa-bullseye:before {
            content: "\f140";
        }

        .fa-ellipsis-h:before {
            content: "\f141";
        }

        .fa-ellipsis-v:before {
            content: "\f142";
        }

        .fa-rss-square:before {
            content: "\f143";
        }

        .fa-play-circle:before {
            content: "\f144";
        }

        .fa-ticket:before {
            content: "\f145";
        }

        .fa-minus-square:before {
            content: "\f146";
        }

        .fa-minus-square-o:before {
            content: "\f147";
        }

        .fa-level-up:before {
            content: "\f148";
        }

        .fa-level-down:before {
            content: "\f149";
        }

        .fa-check-square:before {
            content: "\f14a";
        }

        .fa-pencil-square:before {
            content: "\f14b";
        }

        .fa-external-link-square:before {
            content: "\f14c";
        }

        .fa-share-square:before {
            content: "\f14d";
        }

        .fa-compass:before {
            content: "\f14e";
        }

        .fa-caret-square-o-down:before, .fa-toggle-down:before {
            content: "\f150";
        }

        .fa-caret-square-o-up:before, .fa-toggle-up:before {
            content: "\f151";
        }

        .fa-caret-square-o-right:before, .fa-toggle-right:before {
            content: "\f152";
        }

        .fa-eur:before, .fa-euro:before {
            content: "\f153";
        }

        .fa-gbp:before {
            content: "\f154";
        }

        .fa-dollar:before, .fa-usd:before {
            content: "\f155";
        }

        .fa-inr:before, .fa-rupee:before {
            content: "\f156";
        }

        .fa-cny:before, .fa-jpy:before, .fa-rmb:before, .fa-yen:before {
            content: "\f157";
        }

        .fa-rouble:before, .fa-rub:before, .fa-ruble:before {
            content: "\f158";
        }

        .fa-krw:before, .fa-won:before {
            content: "\f159";
        }

        .fa-bitcoin:before, .fa-btc:before {
            content: "\f15a";
        }

        .fa-file:before {
            content: "\f15b";
        }

        .fa-file-text:before {
            content: "\f15c";
        }

        .fa-sort-alpha-asc:before {
            content: "\f15d";
        }

        .fa-sort-alpha-desc:before {
            content: "\f15e";
        }

        .fa-sort-amount-asc:before {
            content: "\f160";
        }

        .fa-sort-amount-desc:before {
            content: "\f161";
        }

        .fa-sort-numeric-asc:before {
            content: "\f162";
        }

        .fa-sort-numeric-desc:before {
            content: "\f163";
        }

        .fa-thumbs-up:before {
            content: "\f164";
        }

        .fa-thumbs-down:before {
            content: "\f165";
        }

        .fa-youtube-square:before {
            content: "\f166";
        }

        .fa-youtube:before {
            content: "\f167";
        }

        .fa-xing:before {
            content: "\f168";
        }

        .fa-xing-square:before {
            content: "\f169";
        }

        .fa-youtube-play:before {
            content: "\f16a";
        }

        .fa-dropbox:before {
            content: "\f16b";
        }

        .fa-stack-overflow:before {
            content: "\f16c";
        }

        .fa-instagram:before {
            content: "\f16d";
        }

        .fa-flickr:before {
            content: "\f16e";
        }

        .fa-adn:before {
            content: "\f170";
        }

        .fa-bitbucket:before {
            content: "\f171";
        }

        .fa-bitbucket-square:before {
            content: "\f172";
        }

        .fa-tumblr:before {
            content: "\f173";
        }

        .fa-tumblr-square:before {
            content: "\f174";
        }

        .fa-long-arrow-down:before {
            content: "\f175";
        }

        .fa-long-arrow-up:before {
            content: "\f176";
        }

        .fa-long-arrow-left:before {
            content: "\f177";
        }

        .fa-long-arrow-right:before {
            content: "\f178";
        }

        .fa-apple:before {
            content: "\f179";
        }

        .fa-windows:before {
            content: "\f17a";
        }

        .fa-android:before {
            content: "\f17b";
        }

        .fa-linux:before {
            content: "\f17c";
        }

        .fa-dribbble:before {
            content: "\f17d";
        }

        .fa-skype:before {
            content: "\f17e";
        }

        .fa-foursquare:before {
            content: "\f180";
        }

        .fa-trello:before {
            content: "\f181";
        }

        .fa-female:before {
            content: "\f182";
        }

        .fa-male:before {
            content: "\f183";
        }

        .fa-gittip:before, .fa-gratipay:before {
            content: "\f184";
        }

        .fa-sun-o:before {
            content: "\f185";
        }

        .fa-moon-o:before {
            content: "\f186";
        }

        .fa-archive:before {
            content: "\f187";
        }

        .fa-bug:before {
            content: "\f188";
        }

        .fa-vk:before {
            content: "\f189";
        }

        .fa-weibo:before {
            content: "\f18a";
        }

        .fa-renren:before {
            content: "\f18b";
        }

        .fa-pagelines:before {
            content: "\f18c";
        }

        .fa-stack-exchange:before {
            content: "\f18d";
        }

        .fa-arrow-circle-o-right:before {
            content: "\f18e";
        }

        .fa-arrow-circle-o-left:before {
            content: "\f190";
        }

        .fa-caret-square-o-left:before, .fa-toggle-left:before {
            content: "\f191";
        }

        .fa-dot-circle-o:before {
            content: "\f192";
        }

        .fa-wheelchair:before {
            content: "\f193";
        }

        .fa-vimeo-square:before {
            content: "\f194";
        }

        .fa-try:before, .fa-turkish-lira:before {
            content: "\f195";
        }

        .fa-plus-square-o:before {
            content: "\f196";
        }

        .fa-space-shuttle:before {
            content: "\f197";
        }

        .fa-slack:before {
            content: "\f198";
        }

        .fa-envelope-square:before {
            content: "\f199";
        }

        .fa-wordpress:before {
            content: "\f19a";
        }

        .fa-openid:before {
            content: "\f19b";
        }

        .fa-bank:before, .fa-institution:before, .fa-university:before {
            content: "\f19c";
        }

        .fa-graduation-cap:before, .fa-mortar-board:before {
            content: "\f19d";
        }

        .fa-yahoo:before {
            content: "\f19e";
        }

        .fa-google:before {
            content: "\f1a0";
        }

        .fa-reddit:before {
            content: "\f1a1";
        }

        .fa-reddit-square:before {
            content: "\f1a2";
        }

        .fa-stumbleupon-circle:before {
            content: "\f1a3";
        }

        .fa-stumbleupon:before {
            content: "\f1a4";
        }

        .fa-delicious:before {
            content: "\f1a5";
        }

        .fa-digg:before {
            content: "\f1a6";
        }

        .fa-pied-piper-pp:before {
            content: "\f1a7";
        }

        .fa-pied-piper-alt:before {
            content: "\f1a8";
        }

        .fa-drupal:before {
            content: "\f1a9";
        }

        .fa-joomla:before {
            content: "\f1aa";
        }

        .fa-language:before {
            content: "\f1ab";
        }

        .fa-fax:before {
            content: "\f1ac";
        }

        .fa-building:before {
            content: "\f1ad";
        }

        .fa-child:before {
            content: "\f1ae";
        }

        .fa-paw:before {
            content: "\f1b0";
        }

        .fa-spoon:before {
            content: "\f1b1";
        }

        .fa-cube:before {
            content: "\f1b2";
        }

        .fa-cubes:before {
            content: "\f1b3";
        }

        .fa-behance:before {
            content: "\f1b4";
        }

        .fa-behance-square:before {
            content: "\f1b5";
        }

        .fa-steam:before {
            content: "\f1b6";
        }

        .fa-steam-square:before {
            content: "\f1b7";
        }

        .fa-recycle:before {
            content: "\f1b8";
        }

        .fa-automobile:before, .fa-car:before {
            content: "\f1b9";
        }

        .fa-cab:before, .fa-taxi:before {
            content: "\f1ba";
        }

        .fa-tree:before {
            content: "\f1bb";
        }

        .fa-spotify:before {
            content: "\f1bc";
        }

        .fa-deviantart:before {
            content: "\f1bd";
        }

        .fa-soundcloud:before {
            content: "\f1be";
        }

        .fa-database:before {
            content: "\f1c0";
        }

        .fa-file-pdf-o:before {
            content: "\f1c1";
        }

        .fa-file-word-o:before {
            content: "\f1c2";
        }

        .fa-file-excel-o:before {
            content: "\f1c3";
        }

        .fa-file-powerpoint-o:before {
            content: "\f1c4";
        }

        .fa-file-image-o:before, .fa-file-photo-o:before, .fa-file-picture-o:before {
            content: "\f1c5";
        }

        .fa-file-archive-o:before, .fa-file-zip-o:before {
            content: "\f1c6";
        }

        .fa-file-audio-o:before, .fa-file-sound-o:before {
            content: "\f1c7";
        }

        .fa-file-movie-o:before, .fa-file-video-o:before {
            content: "\f1c8";
        }

        .fa-file-code-o:before {
            content: "\f1c9";
        }

        .fa-vine:before {
            content: "\f1ca";
        }

        .fa-codepen:before {
            content: "\f1cb";
        }

        .fa-jsfiddle:before {
            content: "\f1cc";
        }

        .fa-life-bouy:before, .fa-life-buoy:before, .fa-life-ring:before, .fa-life-saver:before, .fa-support:before {
            content: "\f1cd";
        }

        .fa-circle-o-notch:before {
            content: "\f1ce";
        }

        .fa-ra:before, .fa-rebel:before, .fa-resistance:before {
            content: "\f1d0";
        }

        .fa-empire:before, .fa-ge:before {
            content: "\f1d1";
        }

        .fa-git-square:before {
            content: "\f1d2";
        }

        .fa-git:before {
            content: "\f1d3";
        }

        .fa-hacker-news:before, .fa-y-combinator-square:before, .fa-yc-square:before {
            content: "\f1d4";
        }

        .fa-tencent-weibo:before {
            content: "\f1d5";
        }

        .fa-qq:before {
            content: "\f1d6";
        }

        .fa-wechat:before, .fa-weixin:before {
            content: "\f1d7";
        }

        .fa-paper-plane:before, .fa-send:before {
            content: "\f1d8";
        }

        .fa-paper-plane-o:before, .fa-send-o:before {
            content: "\f1d9";
        }

        .fa-history:before {
            content: "\f1da";
        }

        .fa-circle-thin:before {
            content: "\f1db";
        }

        .fa-header:before {
            content: "\f1dc";
        }

        .fa-paragraph:before {
            content: "\f1dd";
        }

        .fa-sliders:before {
            content: "\f1de";
        }

        .fa-share-alt:before {
            content: "\f1e0";
        }

        .fa-share-alt-square:before {
            content: "\f1e1";
        }

        .fa-bomb:before {
            content: "\f1e2";
        }

        .fa-futbol-o:before, .fa-soccer-ball-o:before {
            content: "\f1e3";
        }

        .fa-tty:before {
            content: "\f1e4";
        }

        .fa-binoculars:before {
            content: "\f1e5";
        }

        .fa-plug:before {
            content: "\f1e6";
        }

        .fa-slideshare:before {
            content: "\f1e7";
        }

        .fa-twitch:before {
            content: "\f1e8";
        }

        .fa-yelp:before {
            content: "\f1e9";
        }

        .fa-newspaper-o:before {
            content: "\f1ea";
        }

        .fa-wifi:before {
            content: "\f1eb";
        }

        .fa-calculator:before {
            content: "\f1ec";
        }

        .fa-paypal:before {
            content: "\f1ed";
        }

        .fa-google-wallet:before {
            content: "\f1ee";
        }

        .fa-cc-visa:before {
            content: "\f1f0";
        }

        .fa-cc-mastercard:before {
            content: "\f1f1";
        }

        .fa-cc-discover:before {
            content: "\f1f2";
        }

        .fa-cc-amex:before {
            content: "\f1f3";
        }

        .fa-cc-paypal:before {
            content: "\f1f4";
        }

        .fa-cc-stripe:before {
            content: "\f1f5";
        }

        .fa-bell-slash:before {
            content: "\f1f6";
        }

        .fa-bell-slash-o:before {
            content: "\f1f7";
        }

        .fa-trash:before {
            content: "\f1f8";
        }

        .fa-copyright:before {
            content: "\f1f9";
        }

        .fa-at:before {
            content: "\f1fa";
        }

        .fa-eyedropper:before {
            content: "\f1fb";
        }

        .fa-paint-brush:before {
            content: "\f1fc";
        }

        .fa-birthday-cake:before {
            content: "\f1fd";
        }

        .fa-area-chart:before {
            content: "\f1fe";
        }

        .fa-pie-chart:before {
            content: "\f200";
        }

        .fa-line-chart:before {
            content: "\f201";
        }

        .fa-lastfm:before {
            content: "\f202";
        }

        .fa-lastfm-square:before {
            content: "\f203";
        }

        .fa-toggle-off:before {
            content: "\f204";
        }

        .fa-toggle-on:before {
            content: "\f205";
        }

        .fa-bicycle:before {
            content: "\f206";
        }

        .fa-bus:before {
            content: "\f207";
        }

        .fa-ioxhost:before {
            content: "\f208";
        }

        .fa-angellist:before {
            content: "\f209";
        }

        .fa-cc:before {
            content: "\f20a";
        }

        .fa-ils:before, .fa-shekel:before, .fa-sheqel:before {
            content: "\f20b";
        }

        .fa-meanpath:before {
            content: "\f20c";
        }

        .fa-buysellads:before {
            content: "\f20d";
        }

        .fa-connectdevelop:before {
            content: "\f20e";
        }

        .fa-dashcube:before {
            content: "\f210";
        }

        .fa-forumbee:before {
            content: "\f211";
        }

        .fa-leanpub:before {
            content: "\f212";
        }

        .fa-sellsy:before {
            content: "\f213";
        }

        .fa-shirtsinbulk:before {
            content: "\f214";
        }

        .fa-simplybuilt:before {
            content: "\f215";
        }

        .fa-skyatlas:before {
            content: "\f216";
        }

        .fa-cart-plus:before {
            content: "\f217";
        }

        .fa-cart-arrow-down:before {
            content: "\f218";
        }

        .fa-diamond:before {
            content: "\f219";
        }

        .fa-ship:before {
            content: "\f21a";
        }

        .fa-user-secret:before {
            content: "\f21b";
        }

        .fa-motorcycle:before {
            content: "\f21c";
        }

        .fa-street-view:before {
            content: "\f21d";
        }

        .fa-heartbeat:before {
            content: "\f21e";
        }

        .fa-venus:before {
            content: "\f221";
        }

        .fa-mars:before {
            content: "\f222";
        }

        .fa-mercury:before {
            content: "\f223";
        }

        .fa-intersex:before, .fa-transgender:before {
            content: "\f224";
        }

        .fa-transgender-alt:before {
            content: "\f225";
        }

        .fa-venus-double:before {
            content: "\f226";
        }

        .fa-mars-double:before {
            content: "\f227";
        }

        .fa-venus-mars:before {
            content: "\f228";
        }

        .fa-mars-stroke:before {
            content: "\f229";
        }

        .fa-mars-stroke-v:before {
            content: "\f22a";
        }

        .fa-mars-stroke-h:before {
            content: "\f22b";
        }

        .fa-neuter:before {
            content: "\f22c";
        }

        .fa-genderless:before {
            content: "\f22d";
        }

        .fa-facebook-official:before {
            content: "\f230";
        }

        .fa-pinterest-p:before {
            content: "\f231";
        }

        .fa-whatsapp:before {
            content: "\f232";
        }

        .fa-server:before {
            content: "\f233";
        }

        .fa-user-plus:before {
            content: "\f234";
        }

        .fa-user-times:before {
            content: "\f235";
        }

        .fa-bed:before, .fa-hotel:before {
            content: "\f236";
        }

        .fa-viacoin:before {
            content: "\f237";
        }

        .fa-train:before {
            content: "\f238";
        }

        .fa-subway:before {
            content: "\f239";
        }

        .fa-medium:before {
            content: "\f23a";
        }

        .fa-y-combinator:before, .fa-yc:before {
            content: "\f23b";
        }

        .fa-optin-monster:before {
            content: "\f23c";
        }

        .fa-opencart:before {
            content: "\f23d";
        }

        .fa-expeditedssl:before {
            content: "\f23e";
        }

        .fa-battery-4:before, .fa-battery-full:before {
            content: "\f240";
        }

        .fa-battery-3:before, .fa-battery-three-quarters:before {
            content: "\f241";
        }

        .fa-battery-2:before, .fa-battery-half:before {
            content: "\f242";
        }

        .fa-battery-1:before, .fa-battery-quarter:before {
            content: "\f243";
        }

        .fa-battery-0:before, .fa-battery-empty:before {
            content: "\f244";
        }

        .fa-mouse-pointer:before {
            content: "\f245";
        }

        .fa-i-cursor:before {
            content: "\f246";
        }

        .fa-object-group:before {
            content: "\f247";
        }

        .fa-object-ungroup:before {
            content: "\f248";
        }

        .fa-sticky-note:before {
            content: "\f249";
        }

        .fa-sticky-note-o:before {
            content: "\f24a";
        }

        .fa-cc-jcb:before {
            content: "\f24b";
        }

        .fa-cc-diners-club:before {
            content: "\f24c";
        }

        .fa-clone:before {
            content: "\f24d";
        }

        .fa-balance-scale:before {
            content: "\f24e";
        }

        .fa-hourglass-o:before {
            content: "\f250";
        }

        .fa-hourglass-1:before, .fa-hourglass-start:before {
            content: "\f251";
        }

        .fa-hourglass-2:before, .fa-hourglass-half:before {
            content: "\f252";
        }

        .fa-hourglass-3:before, .fa-hourglass-end:before {
            content: "\f253";
        }

        .fa-hourglass:before {
            content: "\f254";
        }

        .fa-hand-grab-o:before, .fa-hand-rock-o:before {
            content: "\f255";
        }

        .fa-hand-paper-o:before, .fa-hand-stop-o:before {
            content: "\f256";
        }

        .fa-hand-scissors-o:before {
            content: "\f257";
        }

        .fa-hand-lizard-o:before {
            content: "\f258";
        }

        .fa-hand-spock-o:before {
            content: "\f259";
        }

        .fa-hand-pointer-o:before {
            content: "\f25a";
        }

        .fa-hand-peace-o:before {
            content: "\f25b";
        }

        .fa-trademark:before {
            content: "\f25c";
        }

        .fa-registered:before {
            content: "\f25d";
        }

        .fa-creative-commons:before {
            content: "\f25e";
        }

        .fa-gg:before {
            content: "\f260";
        }

        .fa-gg-circle:before {
            content: "\f261";
        }

        .fa-tripadvisor:before {
            content: "\f262";
        }

        .fa-odnoklassniki:before {
            content: "\f263";
        }

        .fa-odnoklassniki-square:before {
            content: "\f264";
        }

        .fa-get-pocket:before {
            content: "\f265";
        }

        .fa-wikipedia-w:before {
            content: "\f266";
        }

        .fa-safari:before {
            content: "\f267";
        }

        .fa-chrome:before {
            content: "\f268";
        }

        .fa-firefox:before {
            content: "\f269";
        }

        .fa-opera:before {
            content: "\f26a";
        }

        .fa-internet-explorer:before {
            content: "\f26b";
        }

        .fa-television:before, .fa-tv:before {
            content: "\f26c";
        }

        .fa-contao:before {
            content: "\f26d";
        }

        .fa-500px:before {
            content: "\f26e";
        }

        .fa-amazon:before {
            content: "\f270";
        }

        .fa-calendar-plus-o:before {
            content: "\f271";
        }

        .fa-calendar-minus-o:before {
            content: "\f272";
        }

        .fa-calendar-times-o:before {
            content: "\f273";
        }

        .fa-calendar-check-o:before {
            content: "\f274";
        }

        .fa-industry:before {
            content: "\f275";
        }

        .fa-map-pin:before {
            content: "\f276";
        }

        .fa-map-signs:before {
            content: "\f277";
        }

        .fa-map-o:before {
            content: "\f278";
        }

        .fa-map:before {
            content: "\f279";
        }

        .fa-commenting:before {
            content: "\f27a";
        }

        .fa-commenting-o:before {
            content: "\f27b";
        }

        .fa-houzz:before {
            content: "\f27c";
        }

        .fa-vimeo:before {
            content: "\f27d";
        }

        .fa-black-tie:before {
            content: "\f27e";
        }

        .fa-fonticons:before {
            content: "\f280";
        }

        .fa-reddit-alien:before {
            content: "\f281";
        }

        .fa-edge:before {
            content: "\f282";
        }

        .fa-credit-card-alt:before {
            content: "\f283";
        }

        .fa-codiepie:before {
            content: "\f284";
        }

        .fa-modx:before {
            content: "\f285";
        }

        .fa-fort-awesome:before {
            content: "\f286";
        }

        .fa-usb:before {
            content: "\f287";
        }

        .fa-product-hunt:before {
            content: "\f288";
        }

        .fa-mixcloud:before {
            content: "\f289";
        }

        .fa-scribd:before {
            content: "\f28a";
        }

        .fa-pause-circle:before {
            content: "\f28b";
        }

        .fa-pause-circle-o:before {
            content: "\f28c";
        }

        .fa-stop-circle:before {
            content: "\f28d";
        }

        .fa-stop-circle-o:before {
            content: "\f28e";
        }

        .fa-shopping-bag:before {
            content: "\f290";
        }

        .fa-shopping-basket:before {
            content: "\f291";
        }

        .fa-hashtag:before {
            content: "\f292";
        }

        .fa-bluetooth:before {
            content: "\f293";
        }

        .fa-bluetooth-b:before {
            content: "\f294";
        }

        .fa-percent:before {
            content: "\f295";
        }

        .fa-gitlab:before {
            content: "\f296";
        }

        .fa-wpbeginner:before {
            content: "\f297";
        }

        .fa-wpforms:before {
            content: "\f298";
        }

        .fa-envira:before {
            content: "\f299";
        }

        .fa-universal-access:before {
            content: "\f29a";
        }

        .fa-wheelchair-alt:before {
            content: "\f29b";
        }

        .fa-question-circle-o:before {
            content: "\f29c";
        }

        .fa-blind:before {
            content: "\f29d";
        }

        .fa-audio-description:before {
            content: "\f29e";
        }

        .fa-volume-control-phone:before {
            content: "\f2a0";
        }

        .fa-braille:before {
            content: "\f2a1";
        }

        .fa-assistive-listening-systems:before {
            content: "\f2a2";
        }

        .fa-american-sign-language-interpreting:before, .fa-asl-interpreting:before {
            content: "\f2a3";
        }

        .fa-deaf:before, .fa-deafness:before, .fa-hard-of-hearing:before {
            content: "\f2a4";
        }

        .fa-glide:before {
            content: "\f2a5";
        }

        .fa-glide-g:before {
            content: "\f2a6";
        }

        .fa-sign-language:before, .fa-signing:before {
            content: "\f2a7";
        }

        .fa-low-vision:before {
            content: "\f2a8";
        }

        .fa-viadeo:before {
            content: "\f2a9";
        }

        .fa-viadeo-square:before {
            content: "\f2aa";
        }

        .fa-snapchat:before {
            content: "\f2ab";
        }

        .fa-snapchat-ghost:before {
            content: "\f2ac";
        }

        .fa-snapchat-square:before {
            content: "\f2ad";
        }

        .fa-pied-piper:before {
            content: "\f2ae";
        }

        .fa-first-order:before {
            content: "\f2b0";
        }

        .fa-yoast:before {
            content: "\f2b1";
        }

        .fa-themeisle:before {
            content: "\f2b2";
        }

        .fa-google-plus-circle:before, .fa-google-plus-official:before {
            content: "\f2b3";
        }

        .fa-fa:before, .fa-font-awesome:before {
            content: "\f2b4";
        }

        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0;
        }

        .sr-only-focusable:active, .sr-only-focusable:focus {
            position: static;
            width: auto;
            height: auto;
            margin: 0;
            overflow: visible;
            clip: auto;
        }

        .swiper-container {
            margin: 0 auto;
            position: relative;
            overflow: hidden;
            list-style: none;
            padding: 0;
            z-index: 1;
        }

        .swiper-container-no-flexbox .swiper-slide {
            float: left;
        }

        .swiper-container-vertical > .swiper-wrapper {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .swiper-wrapper {
            width: 100%;
            height: 100%;
            z-index: 1;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-transition-property: -webkit-transform;
            transition-property: -webkit-transform;
            -o-transition-property: transform;
            transition-property: transform;
            transition-property: transform, -webkit-transform;
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
        }

        .swiper-container-android .swiper-slide,
        .swiper-wrapper {
            -webkit-transform: translate3d(0px, 0, 0);
            transform: translate3d(0px, 0, 0);
        }

        .swiper-container-multirow > .swiper-wrapper {
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .swiper-container-free-mode > .swiper-wrapper {
            -webkit-transition-timing-function: ease-out;
            -o-transition-timing-function: ease-out;
            transition-timing-function: ease-out;
            margin: 0 auto;
        }

        .swiper-slide {
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 100%;
            height: 100%;
            position: relative;
            -webkit-transition-property: -webkit-transform;
            transition-property: -webkit-transform;
            -o-transition-property: transform;
            transition-property: transform;
            transition-property: transform, -webkit-transform;
        }

        .swiper-slide-invisible-blank {
            visibility: hidden;
        }

        .swiper-container-autoheight,
        .swiper-container-autoheight .swiper-slide {
            height: auto;
        }

        .swiper-container-autoheight .swiper-wrapper {
            -webkit-box-align: start;
            -webkit-align-items: flex-start;
            -ms-flex-align: start;
            align-items: flex-start;
            -webkit-transition-property: height, -webkit-transform;
            transition-property: height, -webkit-transform;
            -o-transition-property: transform, height;
            transition-property: transform, height;
            transition-property: transform, height, -webkit-transform;
        }

        .swiper-container-wp8-horizontal,
        .swiper-container-wp8-horizontal > .swiper-wrapper {
            -ms-touch-action: pan-y;
            touch-action: pan-y;
        }

        .swiper-container-wp8-vertical,
        .swiper-container-wp8-vertical > .swiper-wrapper {
            -ms-touch-action: pan-x;
            touch-action: pan-x;
        }

        .swiper_btn {
            width: 20px;
            height: 36px;
            margin-top: -18px;
            position: absolute;
            top: 50%;
            z-index: 10;
            outline: none;
        }

        .swiper_btn__prev {
            left: 0;
        }

        .swiper_btn__next {
            right: 0;
        }

        .swiper_btn__prev,
        .swiper_btn__next {
            position: absolute;
            top: 25%;
            width: 14px;
            height: 22px;
            margin-top: -11px;
            z-index: 10;
            cursor: pointer;
            background-size: 27px 44px;
            background-position: left top;
            background-repeat: no-repeat;
        }

        .swiper-container .swiper_btn {
            opacity: 0.3;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: opacity 0.4s ease-in-out;
            -moz-transition: opacity 0.4s ease-in-out;
            transition: opacity 0.4s ease-in-out;
        }

        .swiper-container:hover .swiper_btn {
            opacity: 1;
        }

        .swiper-button-prev.swiper-button-disabled,
        .swiper-button-next.swiper-button-disabled {
            opacity: 0.35;
            cursor: auto;
            pointer-events: none;
        }

        .swiper_btn__prev,
        .swiper-container-rtl .swiper-button-next {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2054%2088'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23222222'%2F%3E%3C%2Fsvg%3E");
            left: 10px;
            right: auto;
        }

        .swiper_btn__next,
        .swiper-container-rtl .swiper-button-prev {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2054%2088'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23222222'%2F%3E%3C%2Fsvg%3E");
            right: 10px;
            left: auto;
        }

        .swiper-button-prev.swiper-button-white,
        .swiper-container-rtl .swiper-button-next.swiper-button-white {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E");
        }

        .swiper-button-next.swiper-button-white,
        .swiper-container-rtl .swiper-button-prev.swiper-button-white {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E");
        }

        .swiper-button-prev.swiper-button-black,
        .swiper-container-rtl .swiper-button-next.swiper-button-black {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E");
        }

        .swiper-button-next.swiper-button-black,
        .swiper-container-rtl .swiper-button-prev.swiper-button-black {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E");
        }

        .swiper-button-lock {
            display: none;
        }

        .swiper-pagination {
            position: absolute;
            text-align: center;
            -webkit-transition: 300ms opacity;
            -o-transition: 300ms opacity;
            transition: 300ms opacity;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            z-index: 10;
        }

        .swiper-pagination.swiper-pagination-hidden {
            opacity: 0;
        }

        .swiper-pagination-fraction,
        .swiper-pagination-custom,
        .swiper-container-horizontal > .swiper-pagination-bullets {
            bottom: 10px;
            left: 0;
            width: 100%;
            text-align: center;
        }

        .swiper-pagination-fraction {
            color: #333333;
        }

        .swiper-pagination-bullets-dynamic {
            overflow: hidden;
            font-size: 0;
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
            position: relative;
        }

        .swiper-pagination-bullet {
            width: 9px;
            height: 9px;
            display: inline-block;
            border-radius: 100%;
            background: #000;
            opacity: 0.2;
            outline: none;
        }

        button.swiper-pagination-bullet {
            border: none;
            margin: 0;
            padding: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .swiper-pagination-clickable .swiper-pagination-bullet {
            cursor: pointer;
        }

        .swiper-pagination-bullet-active {
            width: 13px;
            height: 13px;
            opacity: 1;
            background: #6bc5b2;
        }

        .swiper-container-vertical > .swiper-pagination-bullets {
            right: 10px;
            top: 50%;
            -webkit-transform: translate3d(0px, -50%, 0);
            transform: translate3d(0px, -50%, 0);
        }

        .swiper-container-vertical > .swiper-pagination-bullets .swiper-pagination-bullet {
            margin: 6px 0;
            display: block;
        }

        .swiper-container-vertical > .swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            width: 8px;
        }

        .swiper-container-vertical > .swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
            display: inline-block;
            -webkit-transition: 200ms top, 200ms -webkit-transform;
            transition: 200ms top, 200ms -webkit-transform;
            -o-transition: 200ms transform, 200ms top;
            transition: 200ms transform, 200ms top;
            transition: 200ms transform, 200ms top, 200ms -webkit-transform;
        }

        .swiper-container-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet {
            margin: 0 4px;
        }

        .swiper-container-horizontal > .swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
            left: 50%;
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            transform: translateX(-50%);
            white-space: nowrap;
        }

        .swiper-container-horizontal > .swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
            -webkit-transition: 200ms left, 200ms -webkit-transform;
            transition: 200ms left, 200ms -webkit-transform;
            -o-transition: 200ms transform, 200ms left;
            transition: 200ms transform, 200ms left;
            transition: 200ms transform, 200ms left, 200ms -webkit-transform;
        }

        .swiper-container-horizontal.swiper-container-rtl > .swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
            -webkit-transition: 200ms right, 200ms -webkit-transform;
            transition: 200ms right, 200ms -webkit-transform;
            -o-transition: 200ms transform, 200ms right;
            transition: 200ms transform, 200ms right;
            transition: 200ms transform, 200ms right, 200ms -webkit-transform;
        }

        .swiper-pagination-progressbar {
            background: rgba(0, 0, 0, 0.25);
            position: absolute;
        }

        .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
            background: #333333;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
            -webkit-transform-origin: left top;
            -ms-transform-origin: left top;
            transform-origin: left top;
            height: 6px;
        }

        .swiper-container-rtl .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
            -webkit-transform-origin: right top;
            -ms-transform-origin: right top;
            transform-origin: right top;
        }

        .swiper-container-horizontal > .swiper-pagination-progressbar,
        .swiper-container-vertical > .swiper-pagination-progressbar.swiper-pagination-progressbar-opposite {
            width: 100%;
            height: 4px;
            left: 0;
            top: auto;
            bottom: 2px;
        }

        .swiper-container-vertical > .swiper-pagination-progressbar,
        .swiper-container-horizontal > .swiper-pagination-progressbar.swiper-pagination-progressbar-opposite {
            width: 4px;
            height: 100%;
            left: 0;
            top: 0;
        }

        .swiper-pagination-white .swiper-pagination-bullet-active {
            background: #ffffff;
        }

        .swiper-pagination-progressbar.swiper-pagination-white {
            background: rgba(255, 255, 255, 0.25);
        }

        .swiper-pagination-progressbar.swiper-pagination-white .swiper-pagination-progressbar-fill {
            background: #ffffff;
        }

        .swiper-pagination-black .swiper-pagination-bullet-active {
            background: #000000;
        }

        .swiper-pagination-progressbar.swiper-pagination-black {
            background: rgba(0, 0, 0, 0.25);
        }

        .swiper-pagination-progressbar.swiper-pagination-black .swiper-pagination-progressbar-fill {
            background: #000000;
        }

        .swiper-pagination-lock {
            display: none;
        }

        .swiper-container .swiper-notification {
            position: absolute;
            left: 0;
            top: 0;
            pointer-events: none;
            opacity: 0;
            z-index: -1000;
        }

        .swiper-container-fade.swiper-container-free-mode .swiper-slide {
            -webkit-transition-timing-function: ease-out;
            -o-transition-timing-function: ease-out;
            transition-timing-function: ease-out;
        }

        .swiper-container-fade .swiper-slide {
            pointer-events: none;
            -webkit-transition-property: opacity;
            -o-transition-property: opacity;
            transition-property: opacity;
        }

        .swiper-container-fade .swiper-slide .swiper-slide {
            pointer-events: none;
        }

        .swiper-container-fade .swiper-slide-active,
        .swiper-container-fade .swiper-slide-active .swiper-slide-active {
            pointer-events: auto;
        }

        .section_slideshow .swiper_pagination {
            display: block;
            position: absolute;
            padding-top: 3px;
            left: 0;
            right: 0;
            bottom: 45px;
        }

        .section_slideshow .swiper_pagination.swiper-pagination-progressbar {
            bottom: 1px;
            height: 6px;
        }

        .swiper-slide img {
            max-width: 100%;
            background: white;
        }

        .linklist_menu_title {
            position: relative;
            padding-right: 0px;
        }

        .linklist_menu_title:after {
            position: absolute;
            content: '\f107';
            font: 14px/1em 'fontAwesome';
            right: 5px;
            top: 50%;
            margin-top: -7px;
            cursor: pointer;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: transform 0.3s ease-in-out;
            -moz-transition: transform 0.3s ease-in-out;
            transition: transform 0.3s ease-in-out;
        }

        .linklist_menu_title.open:after {
            transform: rotate(180deg);
        }

        .page_container {
            max-width: 2048px;
            margin-left: auto;
            margin-right: auto;
        }

        .main_content {
            min-height: 50vh;
            padding-bottom: 50px;
        }

        .sidebar_on.left-sidebar {
            order: 1;
        }

        .section_heading {
            text-align: center;
            font-size: 20px;
            font-weight: 900;
        }

        .megamenu_desktop h2 {
            display: none;
        }

        .megamenu_desktop ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .megamenu_desktop .level_1 {
            font-size: 0;
            display: flex;
            justify-content: center;
        }

        .megamenu_desktop .level_1__item {
            display: inline-block;
            font-size: 16px;
            margin: 0 19px;
        }

        .megamenu_desktop .level_1__link {
            height: 34px;
            display: block;
            position: relative;
            line-height: 34px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: -0.8px;
            color: #333333;
        }

        .megamenu_desktop .level_1__link:before {
            content: '';
            display: block;
            position: absolute;
            bottom: -4px;
            left: 50%;
            width: 0;
            height: 2px;
            background: white;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: all 0.2s ease-in-out;
            -moz-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
        }

        .megamenu_desktop .level_1__link:hover:before, .megamenu_desktop .level_1__link.active:before {
            width: 100%;
            left: 0;
        }

        .megamenu_desktop .megamenu_col__item {
            position: relative;
        }

        .megamenu_desktop .megamenu_col__item .megamenu_banner img {
            width: 100%;
        }

        .megamenu_desktop .level_2 {
            text-align: left;
            position: absolute;
            left: 0;
            right: 0;
            top: 100%;
            z-index: 99;
            display: none;
            width: 100%;
            background: white;
            -webkit-box-shadow: 0 4px 10px 1px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 4px 10px 1px rgba(0, 0, 0, 0.1);
            box-shadow: 0 4px 10px 1px rgba(0, 0, 0, 0.1);
        }

        .megamenu_desktop .level_2 h3 {
            display: none;
            text-transform: uppercase;
        }

        .megamenu_desktop .level_2 h3.visible {
            display: block;
        }

        .megamenu_desktop .level_2 h4 {
            font-size: 14px;
            font-weight: bold;
            padding: 7px 0;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: color 0.3s ease-in-out;
            -moz-transition: color 0.3s ease-in-out;
            transition: color 0.3s ease-in-out;
        }

        .megamenu_desktop .level_2 a:hover h4 {
            color: #333333;
        }

        .megamenu_desktop .level_2 .container {
            overflow: hidden;
            padding: 60px 0 55px;
        }

        .megamenu_desktop .level_2 .megamenu_col__item {
            float: left;
            padding: 0 10px;
        }

        .megamenu_desktop .level_2 .megamenu_col__item.align_center {
            text-align: center;
        }

        .megamenu_desktop .level_2 .megamenu_col__item.align_center .level_3 {
            display: inline-block;
        }

        .megamenu_desktop .level_2 .level_3 {
            text-align: left;
        }

        .megamenu_desktop .level_2 .with_ul {
            position: relative;
        }

        .megamenu_desktop .level_2 .with_ul:after {
            content: "\f105";
            font: 10px/1em "FontAwesome";
            position: absolute;
            right: 0;
            bottom: 5px;
            color: #333333;
        }

        .megamenu_desktop .level_2 .level_3__item {
            position: relative;
        }

        .megamenu_desktop .level_2 .level_3__link {
            position: relative;
            color: #333333;
        }

        .megamenu_desktop .level_2 .level_3__link:hover {
            color: black;
        }

        .megamenu_desktop .level_2 .level_3__link span.badge {
            position: absolute;
            top: -7px;
            left: calc(100% + 20px);
            display: block;
            padding: 0 5px;
            background: #6bc5b2;
            color: white;
            font-size: 8px;
            height: 16px;
            text-transform: uppercase;
            line-height: 16px;
        }

        .megamenu_desktop .level_2 .level_3__link span.badge:before {
            content: "";
            position: absolute;
            right: 100%;
            top: 0;
            width: 0;
            height: 0;
            border: 8px solid transparent;
            border-right-color: #6bc5b2;
        }

        .megamenu_desktop .level_2 .level_3__link span.badge.badge_hot {
            background: red;
        }

        .megamenu_desktop .level_2 .level_3__link span.badge.badge_hot:before {
            border-right-color: red;
        }

        .megamenu_desktop .level_2 .level_3_2 {
            position: absolute;
            top: 0;
            left: 147px;
            background: white;
            padding: 5px 20px 15px;
            width: 160px;
            -webkit-box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.1);
        }

        .megamenu_desktop .level_2 .level_3_2.left_side {
            left: auto;
            right: 147px;
        }

        .megamenu_desktop .level_2 .level_3_2_item {
            padding: 10px 0 0 0;
            position: relative;
        }

        .megamenu_desktop .level_2 .level_3_3 {
            position: absolute;
            top: 0;
            left: 137px;
            background: white;
            padding: 5px 20px 15px;
            -webkit-box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.1);
            width: 160px;
            z-index: 1;
        }

        .megamenu_desktop .level_2 .level_3_3.left_side {
            left: auto;
            right: 137px;
        }

        .megamenu_desktop .level_2 .level_3_3_item {
            padding: 10px 0 0 0;
        }

        .megamenu_desktop .level_2__small {
            position: relative;
        }

        .megamenu_desktop .level_2__small .level_2 {
            left: 0;
            right: auto;
            top: 39px;
        }

        .megamenu_desktop .level_2__small div {
            min-width: 170px;
            padding: 10px 20px 20px 20px;
            background: white;
            -webkit-box-shadow: 0 10px 15px 0 rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 10px 15px 0 rgba(0, 0, 0, 0.1);
            box-shadow: 0 10px 15px 0 rgba(0, 0, 0, 0.1);
        }

        .megamenu_desktop .level_2__small .level_3__item {
            padding: 10px 0 0 0;
        }

        .megamenu_desktop .level_2__small .level_3__link,
        .megamenu_desktop .level_2__small .level_3_2_link,
        .megamenu_desktop .level_2__small .level_3_3_link {
            position: relative;
            color: #333333;
        }

        .megamenu_desktop .level_2__small .level_3__link:after,
        .megamenu_desktop .level_2__small .level_3_2_link:after,
        .megamenu_desktop .level_2__small .level_3_3_link:after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -3px;
            width: 0;
            height: 2px;
            background: #6bc5b2;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: width 0.2s ease-in-out;
            -moz-transition: width 0.2s ease-in-out;
            transition: width 0.2s ease-in-out;
        }

        .megamenu_desktop .level_2__small .level_3__link:hover,
        .megamenu_desktop .level_2__small .level_3_2_link:hover,
        .megamenu_desktop .level_2__small .level_3_3_link:hover {
            color: #6bc5b2;
        }

        .megamenu_desktop .level_2__small .level_3__link:hover:after,
        .megamenu_desktop .level_2__small .level_3_2_link:hover:after,
        .megamenu_desktop .level_2__small .level_3_3_link:hover:after {
            width: 100%;
        }

        .megamenu_desktop .level_2__links .megamenu_col__item {
            width: 25%;
        }

        .megamenu_desktop .level_2__links .megamenu_linklist {
            width: 16.66%;
        }

        .megamenu_desktop .level_2__links .megamenu_linklist img {
            margin-top: 19px;
        }

        .megamenu_desktop .level_2__links .megamenu_col__banner {
            width: 25%;
        }

        .megamenu_desktop .level_2__links .megamenu_col__banner .megamenu_banner {
            display: block;
        }

        .megamenu_desktop .level_2__links h3 {
            margin: 0;
            font-size: 18px;
            letter-spacing: -0.07em;
        }

        .megamenu_desktop .level_2__links .level_3 {
            margin: 15px 0 0 0;
        }

        .megamenu_desktop .level_2__links .level_3__item {
            margin: 3px 0 0 0;
        }

        .megamenu_desktop .level_2__links .level_3__link {
            position: relative;
        }

        .megamenu_desktop .level_2__links .level_3__link:after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -3px;
            width: 0;
            height: 2px;
            background: #6bc5b2;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: width 0.2s ease-in-out;
            -moz-transition: width 0.2s ease-in-out;
            transition: width 0.2s ease-in-out;
        }

        .megamenu_desktop .level_2__links .level_3__link:hover:after {
            width: 100%;
        }

        .megamenu_desktop .item_2link-2ban.container {
            padding-top: 52px;
            padding-bottom: 60px;
        }

        .megamenu_desktop .item_2link-2ban .megamenu_linklist {
            width: 16.66%;
        }

        .megamenu_desktop .item_2link-2ban .megamenu_col__banner {
            padding-top: 8px;
            width: 33.33%;
        }

        .megamenu_desktop .item_2link-2ban .megamenu_col__banner .megamenu_banner .caption_text {
            position: absolute;
            bottom: 13%;
            left: 12%;
        }

        .megamenu_desktop .item_2link-2ban .megamenu_col__banner .megamenu_banner .caption_text h4 {
            font-size: 18px;
        }

        .megamenu_desktop .item_2link-2ban .level_3 {
            margin-top: 0;
        }

        .megamenu_desktop .item_2link-3ban .megamenu_col__item {
            width: 33.33%;
        }

        .megamenu_desktop .item_2link-3ban .megamenu_linklist {
            width: 50%;
            padding-left: 12%;
            margin-bottom: 15px;
        }

        .megamenu_desktop .item_2link-3ban .item_main {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
        }

        .megamenu_desktop .item_2link-3ban .item_main .megamenu_banner {
            width: 100%;
            align-self: flex-end;
            border-top: 1px solid #e1e1e1;
            margin-top: 30px;
            padding-top: 0px;
        }

        .megamenu_desktop .item_2link-3ban .item_main .megamenu_banner .caption_text {
            position: absolute;
            top: 25%;
            bottom: 0;
            left: 0;
            right: 0;
            text-align: center;
        }

        .megamenu_desktop .item_2link-3ban .item_main .megamenu_banner .caption_text h4 {
            font-size: 18px;
            color: white;
        }

        .megamenu_desktop .item_2link-3ban .item_main .level_3 {
            margin-top: 0;
        }

        .megamenu_desktop .item_2link-3ban .megamenu_col__banner .megamenu_banner .caption_text {
            position: absolute;
            bottom: 12%;
            left: 12%;
        }

        .megamenu_desktop .item_2link-3ban .megamenu_col__banner .megamenu_banner .caption_text h4 {
            font-size: 18px;
        }

        .megamenu_desktop .item_3link-2ban #banner_catalog_1 .caption_text {
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
        }

        .megamenu_desktop .item_3link-2ban #banner_catalog_1 .caption_text h4 {
            font-size: 16px;
            margin: 0;
            color: #888;
            font-weight: 300;
        }

        .megamenu_desktop .item_3link-2ban #banner_catalog_1 .caption_text h5 {
            font-size: 18px;
            margin: 0;
        }

        .megamenu_desktop .item_3link-2ban #banner_catalog_2 .caption_text {
            left: 7%;
            bottom: 5%;
        }

        .megamenu_desktop .item_3link-2ban #banner_catalog_2 .caption_text h4 {
            font-size: 40px;
            color: #fff;
            margin: 0;
        }

        .megamenu_desktop .item_3link-2ban #banner_catalog_2 .caption_text h5 {
            font-size: 18px;
            color: #fff;
            font-weight: 300;
            margin: 0;
        }

        .megamenu_desktop .item_3link-2ban .caption_text {
            position: absolute;
        }

        .megamenu_desktop .item_4link-2ban .megamenu_linklist {
            width: 25%;
        }

        .megamenu_desktop .item_4link-2ban .megamenu_col__banner {
            width: 50%;
            margin-top: 45px;
        }

        .megamenu_desktop .item_4link-2ban #banner_catalog_1 .caption_text {
            top: 35%;
            left: 7%;
            right: 0;
            text-align: left;
        }

        .megamenu_desktop .item_4link-2ban #banner_catalog_1 .caption_text h4 {
            font-size: 15px;
            margin: 0;
            color: #333333;
            font-weight: 800;
            text-transform: uppercase;
            padding: 2px 0;
        }

        .megamenu_desktop .item_4link-2ban #banner_catalog_1 .caption_text h5 {
            font-size: 13px;
            margin: 0;
            color: #333333;
            font-weight: 400;
        }

        .megamenu_desktop .item_4link-2ban #banner_catalog_2 .caption_text {
            left: 6%;
            top: 35%;
        }

        .megamenu_desktop .item_4link-2ban #banner_catalog_2 .caption_text h4 {
            font-size: 15px;
            color: #333333;
            font-weight: 800;
            text-transform: uppercase;
        }

        .megamenu_desktop .item_4link-2ban #banner_catalog_2 .caption_text h5 {
            font-size: 13px;
            color: #333333;
            font-weight: 800;
        }

        .megamenu_desktop .item_4link-2ban .caption_text {
            position: absolute;
        }

        .megamenu_desktop .megamenu_banner {
            position: relative;
            line-height: 0;
            overflow: hidden;
        }

        .megamenu_desktop .megamenu_banner img {
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: transform 0.4s ease-in-out;
            -moz-transition: transform 0.4s ease-in-out;
            transition: transform 0.4s ease-in-out;
        }

        .megamenu_desktop .megamenu_banner:hover img {
            transform: scale(1.05);
        }

        .megamenu_desktop .megamenu_footer {
            display: none;
        }

        .menu_badge {
            position: absolute;
            top: -10px;
            right: -31px;
            font-size: 12px;
            background: red;
            color: white;
            text-transform: capitalize;
            line-height: 12px;
            padding: 3px 7px;
            border-radius: 3px;
            letter-spacing: -0.2px;
        }

        .megamenu_mobile {
            text-align: left;
        }

        .megamenu_mobile h2 {
            display: inline-block;
            overflow: hidden;
            margin: 0;
            font-size: 20px;
            cursor: pointer;
        }

        .megamenu_mobile h2 i {
            margin: 0 5px 0 0;
        }

        .megamenu_mobile ul {
            list-style: none;
            padding-left: 0;
        }

        .megamenu_mobile .row {
            margin-right: 0;
            margin-left: 0;
        }

        .megamenu_mobile #megamenu_level__1 {
            margin: 0;
            display: flex;
            flex-direction: column;
            width: 70%;
            overflow-y: scroll;
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            z-index: 1000;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: transform 0.3s ease-in-out;
            -moz-transition: transform 0.3s ease-in-out;
            transition: transform 0.3s ease-in-out;
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0);
        }

        .megamenu_mobile #megamenu_level__1 a {
            color: black;
        }

        .megamenu_mobile #megamenu_level__1.on {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .megamenu_mobile .level_1__item {
            display: block !important;
        }

        .megamenu_mobile .megamenu_trigger {
            width: 22px;
            height: 22px;
            display: block;
            margin: -11px 0 0 0;
            position: absolute;
            right: 0;
            top: 50%;
            text-align: center;
            cursor: pointer;
        }

        .megamenu_mobile .megamenu_trigger:after {
            content: '\f107';
            font: 24px/1em 'fontAwesome';
            display: block;
            margin: 0;
            color: black;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: transform 0.2s ease-in-out;
            -moz-transition: transform 0.2s ease-in-out;
            transition: transform 0.2s ease-in-out;
        }

        .megamenu_mobile .megamenu_trigger.active:after {
            transform: rotate(180deg);
        }

        .megamenu_mobile .container {
            width: 100%;
            padding: 0;
        }

        .megamenu_mobile #megamenu_mobile_close {
            width: 30%;
            background: rgba(0, 0, 0, 0.7);
            position: fixed;
            top: 0;
            bottom: 0;
            right: 0;
            z-index: 150;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: transform 0.3s ease-in-out;
            -moz-transition: transform 0.3s ease-in-out;
            transition: transform 0.3s ease-in-out;
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0);
        }

        .megamenu_mobile #megamenu_mobile_close .close_icon {
            width: 40px;
            height: 40px;
            margin: -20px 0 0 -20px;
            position: absolute;
            top: 50%;
            left: 50%;
        }

        .megamenu_mobile #megamenu_mobile_close .close_icon:before {
            content: "";
            width: 100%;
            height: 2px;
            margin: -1px 0 0 0;
            background: white;
            position: absolute;
            left: 0;
            top: 50%;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .megamenu_mobile #megamenu_mobile_close .close_icon:after {
            content: "";
            width: 100%;
            height: 2px;
            margin: -1px 0 0 0;
            background: white;
            position: absolute;
            left: 0;
            top: 50%;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        .megamenu_mobile #megamenu_mobile_close.on {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .megamenu_mobile .level_1 {
            padding: 30px 20px 30px 30px;
            background: white;
        }

        .megamenu_mobile .level_1__item h3 {
            margin: 0;
            font-size: 16px;
            line-height: 1em;
            font-weight: bold;
            letter-spacing: -0.06em;
            color: #333333;
            text-transform: uppercase;
        }

        .megamenu_mobile .level_1__link {
            display: block;
            padding: 17px 35px 17px 0;
            font-size: 16px;
            line-height: 1em;
            white-space: nowrap;
            text-overflow: ellipsis;
            position: relative;
            font-weight: bold;
            letter-spacing: -0.06em;
            color: #333333;
            text-transform: uppercase;
        }

        .megamenu_mobile .level_2 {
            display: none;
        }

        .megamenu_mobile .level_2 h3 {
            text-transform: none;
        }

        .megamenu_mobile .level_2__small .level_3_2,
        .megamenu_mobile .level_2__small .level_3_3 {
            display: none;
            list-style: disk;
        }

        .megamenu_mobile .level_2__small .level_3__item.with_ul .level_3__link {
            color: #333333;
            font-weight: bold;
        }

        .megamenu_mobile .level_2__small .level_3__link {
            line-height: 1em;
            display: block;
            padding: 5px 0 5px 15px;
            font-size: 16px;
        }

        .megamenu_mobile .level_2__small .level_3_2_link {
            display: block;
            padding: 1px 0 1px 25px;
            font-size: 16px;
            font-weight: normal;
        }

        .megamenu_mobile .level_2__small .level_3_3_link {
            display: block;
            padding: 5px 0 5px 35px;
            font-size: 16px;
            font-weight: lighter;
        }

        .megamenu_mobile .level_2__links {
            letter-spacing: -0.05em;
        }

        .megamenu_mobile .level_2__links h3 {
            padding: 12px 35px 12px 15px;
            position: relative;
        }

        .megamenu_mobile .level_2__links h4 {
            padding: 5px 10px;
            font-size: 14px;
            font-weight: bold;
        }

        .megamenu_mobile .level_2__links img {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .megamenu_mobile .level_2__links .level_3 {
            display: none;
        }

        .megamenu_mobile .level_2__links .level_3__link {
            display: block;
            padding: 5px 0 5px 30px;
            font-size: 16px;
            position: relative;
            line-height: 1em;
        }

        .megamenu_mobile .level_2__links .level_3__link span.badge {
            position: absolute;
            top: 0;
            right: -10px;
            display: block;
            padding: 0 5px;
            background: #6bc5b2;
            color: white;
            font-size: 8px;
            height: 16px;
            text-transform: uppercase;
            line-height: 16px;
        }

        .megamenu_mobile .level_2__links .level_3__link span.badge:before {
            content: "";
            position: absolute;
            right: 100%;
            top: 0;
            width: 0;
            height: 0;
            border: 8px solid transparent;
            border-right-color: #6bc5b2;
        }

        .megamenu_mobile .level_2__links .level_3__link span.badge.badge_hot {
            background: red;
        }

        .megamenu_mobile .level_2__links .level_3__link span.badge.badge_hot:before {
            border-right-color: red;
        }

        .megamenu_mobile .level_2__links a:hover h4 {
            color: #333333;
        }

        .megamenu_mobile .item_4link-2ban .megamenu_col__item,
        .megamenu_mobile .item_3link-2ban .megamenu_col__item,
        .megamenu_mobile .item_2link-2ban .megamenu_col__item,
        .megamenu_mobile .item_2link-3ban .megamenu_col__item {
            display: block;
            width: 100%;
        }

        .megamenu_mobile .item_4link-2ban img,
        .megamenu_mobile .item_3link-2ban img,
        .megamenu_mobile .item_2link-2ban img,
        .megamenu_mobile .item_2link-3ban img {
            display: none;
        }

        .megamenu_mobile .megamenu_col__banner, .megamenu_mobile .megamenu_banner {
            display: none;
        }

        .megamenu_mobile .megamenu_footer {
            display: flex;
            margin: 30px 0 0;
            flex-direction: column;
            justify-content: flex-start;
            flex-grow: 2;
        }

        .megamenu_mobile .megamenu_footer label {
            display: block;
            width: 100%;
            cursor: pointer;
        }

        .megamenu_mobile .megamenu_footer label.current {
            font-weight: bold;
            color: #333333;
        }

        .megamenu_mobile .megamenu_footer .menu_currency_selector__item {
            display: none;
        }

        .megamenu_mobile .megamenu_footer .menu_currency_selector__wrap {
            padding: 15px 0;
            border-top: 1px solid #e1e1e1;
        }

        .megamenu_mobile .megamenu_footer .menu_currency_selector__wrap span {
            font-size: 16px;
            font-weight: bold;
            color: #333333;
            text-transform: uppercase;
        }

        .megamenu_mobile .megamenu_footer .menu_header_wishlist {
            padding: 15px 0;
            border-top: 1px solid #e1e1e1;
        }

        .megamenu_mobile .megamenu_footer .menu_header_wishlist .menu_header_wishlist_text {
            color: #333333;
            text-transform: uppercase;
            font-size: 16px;
            font-weight: bold;
        }

        .megamenu_mobile .megamenu_footer .menu_header_wishlist .zemez_wishlist_total {
            color: #333333;
        }

        .megamenu_mobile .megamenu_footer .menu_header_account {
            padding: 15px 0;
            border-top: 1px solid #e1e1e1;
        }

        .megamenu_mobile .megamenu_footer .menu_header_account span {
            display: block;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: -0.05em;
            color: #333333;
            margin-bottom: 5px;
        }

        .megamenu_mobile .megamenu_footer .menu_header_account a {
            color: #333333;
            display: block;
        }

        .product_listing__main .product_item {
            margin: 20px 0 2px 0;
            background: white;
            padding: 25px 0;
            border: 1px solid #e1e1e1;
        }

        .product_listing__main .product_item:hover .product_links {
            opacity: 1;
        }

        .product_listing__main .product_item:hover .product_color {
            opacity: 1;
            top: -60px;
        }

        .product_listing__main .product_img_wrap {
            position: relative;
        }

        .product_listing__main .product_img {
            position: relative;
        }

        .product_listing__main .product_img img {
            width: 100%;
            background: white;
        }

        .product_listing__main .product_img .image_2 {
            display: none;
        }

        .product_listing__main .product_img .quick_view_btn {
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -10px 0 0 -10px;
            opacity: 0;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: opacity 0.3s ease-in-out;
            -moz-transition: opacity 0.3s ease-in-out;
            transition: opacity 0.3s ease-in-out;
        }

        .product_listing__main .bade_wrap {
            position: absolute;
            top: -15px;
            left: 15px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .product_listing__main .product_badge {
            color: white;
            padding: 5px 10px;
            margin: 3px 0;
            font-size: 14px;
            font-weight: bold;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }

        .product_listing__main .product_badge.new {
            background: #6bc5b2;
        }

        .product_listing__main .product_badge.sale, .product_listing__main .product_badge.sale_percent {
            background: #ffffff;
            color: #e40046;
            border: 1px solid #e40046;
        }

        .product_listing__main .product_badge.sale_out {
            background: #222222;
        }

        .product_listing__main .product_badge.custom_badge_1 {
            background: #ffffff;
            color: #000;
        }

        .product_listing__main .product_badge.custom_badge_2 {
            background: #ffffff;
            color: #159ec9;
        }

        .product_listing__main .product_info {
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .product_listing__main .product_links {
            opacity: 0;
            z-index: 2;
            -webkit-transition: opacity 0.3s ease-in-out;
            -moz-transition: opacity 0.3s ease-in-out;
            transition: opacity 0.3s ease-in-out;
        }

        .product_listing__main .product_links .add_to_cart_form {
            position: absolute;
            top: 60%;
            left: 50%;
            display: inline-block;
        }

        .product_listing__main .product_links .add_to_cart_form .btn {
            margin-left: -50%;
            margin-top: -50%;
        }

        .product_listing__main .product_links .product_links__subbutton {
            position: absolute;
            top: -15px;
            right: 10px;
        }

        .product_listing__main .product_links .quick_view_btn,
        .product_listing__main .product_links .wishlist_btn {
            width: 30px;
            height: 30px;
            margin-bottom: 5px;
            border-radius: 5px;
            display: block;
            text-align: center;
            line-height: 30px;
        }

        .product_listing__main .product_links .quick_view_btn span,
        .product_listing__main .product_links .wishlist_btn span {
            display: none;
        }

        .product_listing__main .product_links .quick_view_btn svg,
        .product_listing__main .product_links .wishlist_btn svg {
            fill: #6bc5b2;
            vertical-align: middle;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: all 0.2s ease-in-out;
            -moz-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
        }

        .product_listing__main .product_links .quick_view_btn:hover svg,
        .product_listing__main .product_links .wishlist_btn:hover svg {
            fill: #333333;
        }

        .product_listing__main .product_links .wishlist_btn svg {
            fill: transparent;
            stroke: #6bc5b2;
        }

        .product_listing__main .product_links .wishlist_btn:hover svg {
            fill: transparent;
            stroke: #333333;
        }

        .product_listing__main .product_links .wishlist_btn[data-action="remove"] svg {
            fill: #c92c2c;
        }

        .product_listing__main .product_links .btn_options,
        .product_listing__main .product_links .btn-cart {
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: color 0.2s ease-in-out;
            -moz-transition: color 0.2s ease-in-out;
            transition: color 0.2s ease-in-out;
            font-family: Lato, sans-serif;
        }

        .product_listing__main .product_links .btn_options i,
        .product_listing__main .product_links .btn-cart i {
            margin-right: 5px;
        }

        .product_listing__main .product_vendor {
            font-size: 14px;
            font-weight: bold;
            letter-spacing: -0.06em;
            display: none;
            color: #333333;
            margin-bottom: 5px;
        }

        .product_listing__main .product_desc {
            display: none;
        }

        .product_listing__main .product_name {
            margin: 0;
            padding: 10px 20px 0;
            letter-spacing: 0.01em;
            text-align: left;
        }

        .product_listing__main .product_prop {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .product_listing__main .product_price {
            margin: 0 0 0 20px;
            line-height: 1.5em;
            text-align: left;
        }

        .product_listing__main .product_price .main_price {
            font-weight: 800;
            font-size: 16px;
        }

        .product_listing__main .product_color {
            position: absolute;
            z-index: -1;
            top: -10px;
            left: 0;
            right: 0;
            opacity: 0;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
        }

        .product_listing__main .product_color .color_options {
            width: 30px;
            height: 30px;
            margin: 10px 5px;
            display: inline-block;
            vertical-align: baseline;
            cursor: pointer;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            background-color: #ccc;
            border: 1px solid #ddd;
        }

        .product_listing__main .product_color .color_options_info {
            display: inline-block;
            vertical-align: top;
            margin: 10px 0;
            line-height: 30px;
        }

        .product_listing__list {
            margin-top: 8px;
        }

        .product_listing__list > div {
            width: 100%;
            padding-top: 18px;
            padding-bottom: 3px;
            max-width: none;
            flex-basis: 100%;
        }

        .product_listing__list > div:last-child .product_item:after {
            display: none;
        }

        .product_listing__list .product_item {
            margin: 0;
            display: flex;
            position: relative;
            padding: 40px 25px 10px;
        }

        .product_listing__list .product_img_wrap {
            position: static;
        }

        .product_listing__list .product_img {
            width: 150px;
        }

        .product_listing__list .product_img img {
            display: none;
        }

        .product_listing__list .product_img .image_2 {
            display: block;
        }

        .product_listing__list .bade_wrap {
            left: -10px;
        }

        .product_listing__list .product_color {
            display: none;
        }

        .product_listing__list .product_links {
            opacity: 1;
            position: absolute;
            top: 47%;
            right: 4%;
            display: flex;
        }

        .product_listing__list .product_links .add_to_cart_form {
            position: static;
            margin: 0 11px;
        }

        .product_listing__list .product_links .add_to_cart_form .btn {
            width: 126px;
            margin: 0;
        }

        .product_listing__list .product_links .product_links__subbutton {
            position: static;
        }

        .product_listing__list .product_links .quick_view_btn {
            display: none;
        }

        .product_listing__list .product_links .wishlist_btn {
            width: 44px;
            height: 44px;
            border: 1px solid transparent;
            border-radius: 5px;
            padding: 5px;
            box-shadow: 2px 2px 10px -4px #222;
        }

        .product_listing__list .product_links .wishlist_btn svg {
            stroke: #6bc5b2;
            fill: white;
        }

        .product_listing__list .product_links .wishlist_btn:hover svg {
            stroke: #333333;
            fill: white;
        }

        .product_listing__list .product_info {
            padding: 0 20px 45px;
            text-align: left;
            flex-grow: 1;
        }

        .product_listing__list .product_vendor {
            display: none;
        }

        .product_listing__list .product_name {
            font-size: 16px;
            color: #6bc5b2;
            letter-spacing: -0.045em;
            margin: 22px 6px 10px;
            padding: 0px;
        }

        .product_listing__list .product_name a:hover {
            color: #333333;
        }

        .product_listing__list .product_desc {
            display: block;
            font-size: 13px;
            line-height: 1.3em;
            width: 65%;
            margin: 25px 7px;
            color: #333333;
        }

        .product_listing__list .product_price {
            margin: 0;
            padding: 0;
            position: absolute;
            top: 17%;
            right: 5%;
            display: flex;
            width: 20%;
            color: #333333;
        }

        .product_listing__list .product_price .main_price {
            font-size: 24px;
            letter-spacing: -0.01em;
            font-weight: 800;
        }

        .product_listing__list .product_price .money_sale {
            margin-left: 20px;
            display: block;
        }

        .mobile .product_listing__main .quick_view_btn,
        .tablet .product_listing__main .quick_view_btn {
            display: none !important;
        }

        .section_collection-list .section_heading {
            letter-spacing: 0.01em;
            font-size: 20px;
            font-weight: 800;
            margin-bottom: 29px;
        }

        .collection_listing__main {
            margin-top: -20px;
        }

        .collection_listing__main .collection_item {
            margin: 15px 0;
            display: block;
            position: relative;
            overflow: hidden;
            border: 1px solid #e1e1e1;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .collection_listing__main .collection_item:hover {
            box-shadow: 0px 0px 10px 5px #f1f1f1;
            border: none;
        }

        .collection_listing__main .collection_item .collection_title {
            margin: 0;
            display: block;
            font-size: 16px;
            letter-spacing: 0.01em;
            color: black;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: color 0.4s ease-in-out;
            -moz-transition: color 0.4s ease-in-out;
            transition: color 0.4s ease-in-out;
            font-weight: bold;
        }

        .collection_listing__main .collection_item .collection_products {
            display: block;
            padding: 10px 0 0 0;
            color: #333333;
        }

        .collection_listing__main .collection_caption {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            padding: 20px 30px;
            display: flex;
        }

        .collection_listing__main .type_1 .collection_item .collection_title {
            color: #333333;
        }

        .collection_listing__main .type_1 .collection_item:hover .collection_title {
            color: #6bc5b2;
        }

        .collection_listing__main .type_1 .collection_caption {
            align-items: flex-end;
            justify-content: center;
        }

        .collection_listing__main .type_2 .collection_caption {
            justify-content: center;
            align-items: center;
            text-align: center;
            background: rgba(0, 0, 0, 0.3);
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: background 0.4s ease-in-out;
            -moz-transition: background 0.4s ease-in-out;
            transition: background 0.4s ease-in-out;
        }

        .collection_listing__main .type_2 .collection_title {
            font-size: 40px;
            color: white;
            text-transform: uppercase;
        }

        .collection_listing__main .type_2 .collection_item:hover .collection_caption {
            background: rgba(0, 0, 0, 0.6);
        }

        .collection_listing__main .collection_img {
            line-height: 0;
        }

        .collection_listing__main .img_placeholder__wrap {
            padding: 100% 0 0 0;
        }

        .collection_listing_wrap .view_all__wrap {
            text-align: center;
            padding: 30px 0 15px;
        }

        .breadcrumbs {
            padding: 0 0 26px 0;
        }

        .breadcrumbs ul {
            list-style: none;
            padding: 0;
            font-size: 0;
            line-height: 0;
        }

        .breadcrumbs li {
            display: inline-block;
            padding: 30px 11px 0 0;
        }

        .breadcrumbs li span {
            position: relative;
        }

        .breadcrumbs li ~ li:before {
            content: "|";
            margin: 0 13px 0 0;
            font-size: 12px;
            font-weight: lighter;
        }

        .breadcrumbs a,
        .breadcrumbs span {
            font-size: 12px;
            line-height: 1em;
        }

        .breadcrumbs span {
            text-transform: capitalize;
        }

        .breadcrumbs a {
            position: relative;
        }

        .breadcrumbs a:after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 1px;
            opacity: 0;
            background: #6bc5b2;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: opacity 0.2s ease-in-out;
            -moz-transition: opacity 0.2s ease-in-out;
            transition: opacity 0.2s ease-in-out;
        }

        .breadcrumbs a:hover:after {
            opacity: 1;
        }

        .button_filters {
            margin: 5px 0 30px;
        }

        .button_filters ul {
            font-size: 0;
        }

        .button_filters li {
            display: inline-block;
            margin: 10px 10px 0 0;
        }

        .button_filters a {
            border: 1px solid #e1e1e1;
            border-radius: 5px;
            display: block;
            min-width: 40px;
            padding: 7px 10px;
            font-size: 14px;
            text-transform: capitalize;
            font-weight: bold;
        }

        .button_filters .active a {
            background: black;
            color: white;
        }

        .pagination {
            overflow: hidden;
            margin: 30px 0 0;
        }

        .pagination p {
            line-height: 30px;
            margin: 0;
            font-size: 15px;
            letter-spacing: -0.01em;
        }

        .pagination ul {
            margin: 10px 0;
            list-style: none;
            padding: 0;
        }

        .pagination li {
            display: inline-block;
            font-size: 0;
            line-height: 0;
            vertical-align: middle;
            padding: 0 6px 0 0;
        }

        .pagination .pagination_el a, .pagination .pagination_el span {
            font-size: 16px;
            height: 44px;
            line-height: 40px;
            min-width: 44px;
            border: 1px solid #e1e1e1;
            border-radius: 5px;
            font-weight: bold;
            text-align: center;
            display: inline-block;
            background: white;
            color: #6bc5b2;
        }

        .pagination .pagination_el:hover a {
            border-color: #333333;
        }

        .pagination .pagination_prev a {
            vertical-align: middle;
        }

        .pagination .pagination_prev i {
            font-size: 34px;
            margin: 0 5px 0 0;
        }

        .pagination .pagination_next a {
            vertical-align: middle;
        }

        .pagination .pagination_next i {
            font-size: 34px;
            margin: 0 0 0 5px;
        }

        .pagination .pagination_current span {
            color: white;
            background: #6bc5b2;
        }

        .blog_pagination {
            text-align: right;
            margin-top: 0;
        }

        .blog_pagination span {
            margin-right: 5px;
        }

        .blog_pagination .current {
            color: #6bc5b2;
        }

        .blur-up {
            -webkit-filter: blur(5px);
            filter: blur(5px);
            transition: filter 300ms, -webkit-filter 300ms;
        }

        .blur-up.lazyloaded {
            -webkit-filter: blur(0);
            filter: blur(0);
        }

        .section_invisible {
            opacity: 0 !important;
        }

        .section_visible {
            opacity: 1 !important;
        }

        .social_sharing_block {
            padding: 10px 0 0 0;
            font-size: 0;
            text-align: center;
        }

        .social_sharing_block span {
            font-size: 14px;
            font-weight: bold;
            margin-right: 3px;
            color: #333333;
        }

        .social_sharing_block a {
            width: 30px;
            height: 30px;
            display: inline-block;
            margin: 0;
            font-size: 22px;
            line-height: 30px;
            text-align: center;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }

        .social_sharing_block a:hover {
            background: #6bc5b2;
            color: white;
        }

        .img_placeholder__wrap {
            overflow: hidden;
            position: relative;
        }

        .img_placeholder {
            width: 100%;
            height: 100%;
            max-width: 100%;
            max-height: 100%;
            display: block;
            position: absolute;
            left: 0;
            top: 0;
            background: rgba(0, 0, 0, 0.1);
            fill: rgba(0, 0, 0, 0.5);
        }

        .currency_selector {
            display: inline-block;
        }

        .currency_selector__label {
            margin: 0 5px 0 0;
            line-height: 34px;
        }

        .currency_selector__wrap {
            display: inline-block;
            position: relative;
            z-index: 130;
            cursor: pointer;
        }

        #currency_active {
            height: 30px;
            display: inline-block;
            padding: 0 10px;
            line-height: 32px;
            position: relative;
            z-index: 10;
            font-size: 14px;
        }

        #currency_active:after {
            content: "\f107";
            font: 18px/1em "FontAwesome";
            margin-left: 4px;
            display: inline-block;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: all 0.2s ease-in-out;
            -moz-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
        }

        #currency_active.opened:after {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        #currency_active:hover {
            color: #6bc5b2;
        }

        #currency_selector {
            position: absolute;
            right: 0;
            left: 10px;
            top: 100%;
            padding: 10px 10px;
            width: 90px;
            margin: 0;
            z-index: 1;
            background: white;
            border: 1px solid #333333;
            list-style: none;
            text-align: center;
            -webkit-transition: transform 0.2s ease-in-out;
            -moz-transition: transform 0.2s ease-in-out;
            transition: transform 0.2s ease-in-out;
            -webkit-transform: scale3d(1, 0, 1);
            transform: scale3d(1, 0, 1);
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
        }

        #currency_selector li {
            padding: 5px 0;
        }

        #currency_selector li:hover {
            color: black;
            background: #f6f6fa;
        }

        #currency_selector.opened {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }

        .social_menu {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .social_menu ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .social_menu li {
            display: inline-block;
            vertical-align: middle;
            margin-right: 10px;
            font-size: 21px;
        }

        .social_menu li:last-child {
            margin-right: 0;
        }

        .social_menu li a {
            color: #333333;
        }

        .social_menu li a:hover {
            color: #6bc5b2;
        }

        header {
            background: white;
            position: relative;
            z-index: 99;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        header.megamenu_stuck {
            width: 100%;
            position: fixed;
            left: 0;
            top: 0;
            -webkit-backface-visibility: hidden;
            -webkit-transform: translateZ(0);
        }

        .header_row_1 {
            margin: 0 auto;
            padding: 21px 0 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #333333;
        }

        .header_row_1 a:not(.btn) {
            color: #333333;
        }

        .header_row_1 a:not(.btn):hover {
            color: #6bc5b2;
        }

        .header_row_1.inverted {
            color: white;
        }

        .header_row_1.inverted a {
            color: white;
        }

        .header_row_1.inverted a:hover {
            color: white;
        }

        .header_row_1.inverted svg, .header_row_1.inverted .header_search .search_toggle svg {
            fill: white;
        }

        .header_row_1.inverted svg:hover, .header_row_1.inverted .header_search .search_toggle svg:hover {
            fill: #8b8b8b;
        }

        .header_row_1.inverted .header_wishlist svg {
            stroke: white;
            fill: transparent;
        }

        .header_row_1.inverted .header_wishlist svg:hover {
            stroke: #8b8b8b;
        }

        .header_row_1.inverted #search_result_container a {
            color: #8b8b8b;
        }

        .header_row_1.inverted #search_result_container a:hover {
            color: #6bc5b2;
        }

        .header_row_1.inverted #currency_selector li {
            color: #8b8b8b;
        }

        .header_row_1.inverted #currency_selector li:hover {
            color: #6bc5b2;
        }

        .header_row_1 .container {
            display: flex;
            justify-content: space-between;
        }

        .header_item_left {
            width: 380px;
        }

        .header_item_right {
            padding-top: 2px;
            width: 380px;
            text-align: right;
        }

        .header_logout {
            margin-left: 10px;
        }

        .header_row_2 {
            padding: 5px 0;
            color: #333333;
        }

        .header_row_2 .header_main_wrap {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .header_row_2 a {
            color: #333333;
        }

        .header_row_2 a:hover {
            color: #6bc5b2;
        }

        .header_row_2.inverted {
            color: white;
        }

        .header_row_2.inverted .megamenu_desktop .level_1__link {
            color: white;
        }

        .header_row_2.inverted #megamenu_mobile_toggle {
            color: white;
        }

        .header_row_2.inverted .megamenu_mobile a {
            color: #333333;
        }

        .header_row_2.inverted .megamenu_mobile a:hover {
            color: #6bc5b2;
        }

        .cart_link svg {
            display: inline-block;
            vertical-align: middle;
            margin-left: 3px;
            margin-top: -3px;
            fill: #333333;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: fill 0.2s ease-in-out;
            -moz-transition: fill 0.2s ease-in-out;
            transition: fill 0.2s ease-in-out;
        }

        .cart_link:hover svg {
            fill: #6bc5b2;
        }

        .header_logo {
            display: inline-block;
            font-size: 18px;
            text-transform: uppercase;
        }

        .header_logo .logo_slogan {
            color: white;
            display: block;
            margin-top: 2px;
            letter-spacing: -0.1px;
            font-size: 11px;
            line-height: 1em;
            text-transform: none;
            text-align: center;
        }

        .header_search {
            display: inline-block;
            vertical-align: middle;
            margin: 0 15px 0 0;
        }

        .header_search .search_form_wrap {
            position: fixed;
            top: -150px;
            right: 0;
            left: 0;
            width: 100%;
            z-index: 200;
            background: white;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: top 0.4s ease-in-out;
            -moz-transition: top 0.4s ease-in-out;
            transition: top 0.4s ease-in-out;
        }

        .header_search .search_form_wrap.open {
            top: 0;
        }

        .header_search .search_form_wrap.open .search_form_cover {
            display: block;
        }

        .header_search .search_form_wrap .search_form_cover {
            position: fixed;
            background: rgba(0, 0, 0, 0.7);
            width: 100%;
            min-height: 100vh;
            top: 100%;
            left: 0;
            right: 0;
            bottom: 0;
            display: none;
        }

        .header_search .search_form_wrap .header_serch_caption {
            font-size: 14px;
        }

        .header_search .search_form_wrap label svg {
            fill: black;
        }

        .header_search .search_toggle {
            cursor: pointer;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: color 0.2s ease-in-out;
            -moz-transition: color 0.2s ease-in-out;
            transition: color 0.2s ease-in-out;
        }

        .header_search .search_toggle svg {
            margin-left: 3px;
            margin-top: -3px;
            vertical-align: middle;
            fill: white;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: fill 0.2s ease-in-out;
            -moz-transition: fill 0.2s ease-in-out;
            transition: fill 0.2s ease-in-out;
        }

        .header_search .search_toggle:hover {
            color: #6bc5b2;
        }

        .header_search .search_toggle:hover svg {
            fill: #6bc5b2;
        }

        .header_search .search_toggle.open .fa-times {
            display: inline-block;
        }

        .header_search .fa-times {
            display: none;
            margin-left: 10px;
            color: red;
        }

        .header_search .search_form {
            padding-top: 30px;
            position: relative;
            width: 500px;
            max-width: 100%;
            margin: 0 auto;
            overflow: hidden;
            height: 150px;
            text-align: left;
        }

        .header_search .search_form .search_toggle svg {
            fill: black;
        }

        .header_search input[type=submit] {
            display: none;
        }

        .header_search input {
            display: block;
            margin: 0;
            padding: 5px 35px 5px 0;
            height: 40px;
            border-radius: 0;
            font-size: 24px;
            border: none;
            color: #333333;
            border-bottom: 1px solid #e1e1e1;
        }

        .header_search input::-webkit-input-placeholder {
            color: #333333;
        }

        .header_search input::-moz-placeholder {
            color: #333333;
        }

        .header_search input:-moz-placeholder {
            color: #333333;
        }

        .header_search input:-ms-input-placeholder {
            color: #333333;
        }

        .header_search .search_toggle svg {
            fill: black;
        }

        .header_search label {
            position: absolute;
            top: 62px;
            right: 10px;
            cursor: pointer;
        }

        .header_search label svg {
            margin-top: 3px;
        }

        .header_search button {
            width: 34px;
            height: 39px;
            color: #000;
            position: absolute;
            right: 0;
            top: 0;
        }

        .header_search button:hover {
            color: #888;
        }

        .header_search .search_form_close {
            cursor: pointer;
            position: absolute;
            top: 33px;
            right: 0;
            color: #333333;
        }

        .header_search #search_result_container {
            position: absolute;
            right: 0;
            left: 0;
            top: 115px;
            border: 1px solid #e1e1e1;
            background: white;
            opacity: 0;
            max-width: 500px;
            z-index: 100;
            padding: 18px 42px;
            margin-left: auto;
            margin-right: auto;
            text-align: left;
            visibility: hidden;
            max-height: 328px;
            overflow-y: auto;
        }

        .header_search #search_result_container.active {
            opacity: 1;
            visibility: visible;
        }

        .header_search #search_result_container .search_results {
            padding: 0;
            margin: 0;
            font-size: 14px;
            font-weight: lighter;
        }

        .header_search #search_result_container .search_results__img {
            display: block;
            line-height: 0;
        }

        .header_search #search_result_container .search_results__name {
            margin: 0;
            color: #333333;
            font-size: 15px;
            line-height: 1.3em;
            letter-spacing: -0.01em;
            font-weight: normal;
        }

        .header_search #search_result_container .search_results__price {
            margin: 0;
        }

        .header_search #search_result_container .article_info {
            margin: 0;
            font-style: 12px;
            font-style: italic;
        }

        .header_search #search_result_container li {
            display: flex;
            padding: 20px 0;
            border-bottom: 1px solid #e1e1e1;
        }

        .header_search #search_result_container li:last-child {
            border-bottom: none;
        }

        .header_search #search_result_container li.centred {
            padding: 27px 0 9px;
            letter-spacing: -0.03em;
        }

        .header_search #search_result_container li.centred a {
            margin: 0 auto;
            position: relative;
        }

        .header_search #search_result_container li.centred a:after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: #6bc5b2;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: width 0.2s ease-in-out;
            -moz-transition: width 0.2s ease-in-out;
            transition: width 0.2s ease-in-out;
        }

        .header_search #search_result_container li.centred a:hover:after {
            width: 100%;
        }

        .header_search #search_result_container .desk {
            flex-grow: 2;
            padding-left: 30px;
        }

        .header_layout_2 .top_pannel .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header_layout_2 .header_row_1 {
            padding: 18px 0 7px;
        }

        .header_layout_2 .megamenu {
            margin-bottom: 10px;
        }

        .header_layout_2 .megamenu_desktop .level_1__link:before {
            bottom: 0;
        }

        .header_layout_2 .header_item_right {
            width: 220px;
            padding-top: 0;
        }

        .header_layout_2 .header_item_left {
            width: 220px;
        }

        .header_layout_2 .social_menu {
            padding: 7px 0;
        }

        .header_layout_2 #currency_active {
            color: #333333;
        }

        .header_layout_2 #currency_active:hover {
            color: #6bc5b2;
        }

        .header_layout_2 #currency_selector {
            left: -28px;
        }

        .header_layout_2 .header_wishlist {
            margin-left: 0;
            margin-right: 10px;
        }

        .header_layout_2 .header_item_center {
            align-self: flex-end;
        }

        .header_layout_2 .header_account, .header_layout_2 .header_search {
            margin-right: 20px;
        }

        .header_layout_2 .header_account a {
            display: inline-block;
            height: 20px;
        }

        .header_layout_3 .top_pannel {
            background: #333333;
            text-align: center;
        }

        .header_layout_3 .top_pannel a {
            padding: 8px 15px;
            color: white;
            display: block;
        }

        .header_layout_3 .top_pannel a:hover {
            color: #6bc5b2;
        }

        .header_layout_3 .header_row_1 .container_big,
        .header_layout_3 .header_row_2 .container_big {
            display: flex;
            width: 100%;
            justify-content: space-between;
        }

        .header_layout_3 .header_row_1 .header_item_left,
        .header_layout_3 .header_row_1 .header_item_right,
        .header_layout_3 .header_row_2 .header_item_left,
        .header_layout_3 .header_row_2 .header_item_right {
            width: auto;
        }

        .header_layout_3 .header_row_2 {
            border-top: 1px solid #e1e1e1;
        }

        .header_layout_3 .header_currency {
            display: inline-block;
            margin-left: 10px;
        }

        .header_layout_3 .header_currency #currency_selector {
            right: 0;
            left: auto;
        }

        .header_layout_3 .header_wishlist {
            margin-right: 20px;
        }

        .header_layout_3 .megamenu_desktop .level_1__item {
            margin: 0 40px 0 0;
        }

        .header_layout_3 .megamenu_desktop .level_1__link:before {
            color: white;
        }

        .header_layout_3 .megamenu_desktop .level_1__link.sf-with-ul:after {
            content: '\f107';
            font: 16px/1 'fontAwesome';
            margin-left: 3px;
        }

        .header_account {
            display: inline-block;
            vertical-align: middle;
            margin-right: 14px;
        }

        .header_account a svg {
            display: inline-block;
            vertical-align: middle;
            margin-top: -3px;
            fill: #333333;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: fill 0.3s ease-in-out;
            -moz-transition: fill 0.3s ease-in-out;
            transition: fill 0.3s ease-in-out;
        }

        .header_account a:hover svg {
            fill: #6bc5b2;
        }

        .header_wishlist {
            display: inline-block;
            vertical-align: baseline;
            position: relative;
            margin-right: 15px;
        }

        .header_wishlist svg {
            stroke: #333333;
            vertical-align: middle;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: stroke 0.2s ease-in-out;
            -moz-transition: stroke 0.2s ease-in-out;
            transition: stroke 0.2s ease-in-out;
        }

        .header_wishlist a {
            position: relative;
        }

        .header_wishlist a:hover svg {
            stroke: #6bc5b2;
        }

        .header_wishlist .zemez_wishlist_total {
            width: 20px;
            height: 21px;
            line-height: 21px;
            text-align: center;
            font-size: 16px;
            color: white;
            position: absolute;
            top: -18px;
            right: -18px;
            border-radius: 5px 5px 5px 0;
        }

        .header_cart {
            position: relative;
            display: inline-block;
            vertical-align: middle;
        }

        .header_cart i {
            margin-right: 5px;
        }

        .header_cart b {
            text-transform: uppercase;
            color: #333333;
            letter-spacing: 0.1em;
        }

        .header_cart .header_cart_items {
            width: 20px;
            height: 21px;
            line-height: 21px;
            text-align: center;
            font-size: 16px;
            background: black;
            color: white;
            position: absolute;
            top: -18px;
            right: -18px;
            border-radius: 5px 5px 5px 0;
        }

        .header_cart #cart_content_box {
            border: 1px solid #e1e1e1;
            padding: 10px 40px;
            background: white;
            z-index: 110;
            width: 440px;
            text-align: left;
            position: relative;
            color: #333333;
        }

        .header_cart #cart_content_box ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .header_cart #cart_content_box .cart_items {
            display: flex;
            width: 100%;
            padding: 30px 0;
            list-style-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7);
        }

        .header_cart #cart_content_box .cart_items img {
            background: white;
        }

        .header_cart #cart_content_box .item_desc {
            flex-grow: 2;
            padding: 0 0 0 15px;
            position: relative;
            color: #333333;
        }

        .header_cart #cart_content_box .item_desc .product_title {
            display: block;
            width: 100%;
            color: #333333;
            font-size: 16px;
            line-height: 1.2em;
        }

        .header_cart #cart_content_box .item_desc .product_title:hover {
            color: #6bc5b2;
        }

        .header_cart #cart_content_box .item_desc .money {
            font-size: 16px;
            font-weight: bold;
            display: block;
            margin: 3px 0;
            color: #333333;
        }

        .header_cart #cart_content_box .item_desc .product_quantity {
            margin: 0;
            color: #333333;
            font-size: 14px;
        }

        .header_cart #cart_content_box .cart_clear {
            width: 40%;
            text-decoration: underline;
            font-size: 14px;
            color: #333333;
        }

        .header_cart #cart_content_box .cart_total {
            width: 60%;
            text-align: left;
        }

        .header_cart #cart_content_box .cart_total b {
            font-size: 14px;
            vertical-align: bottom;
            text-transform: none;
            color: #333333;
            margin-right: 5px;
        }

        .header_cart #cart_content_box .cart_total .money {
            font-weight: bold;
            font-size: 24px;
            color: #333333;
        }

        .header_cart #cart_content_box .box_footer {
            display: flex;
            padding: 10px 0;
            align-items: center;
            flex-wrap: wrap;
            justify-content: space-between;
            border-top: 1px solid #e1e1e1;
        }

        .header_cart #cart_content_box .box_footer .btn {
            width: 175px;
        }

        .header_cart #cart_content_box .box_footer .btn_inverted {
            color: #6bc5b2;
            background: white;
        }

        .header_cart #cart_content_box .box_footer .btn_inverted:hover {
            color: white;
            background: #6bc5b2;
        }

        .header_cart #cart_content_box .cart_link,
        .header_cart #cart_content_box .cart_url {
            color: white;
        }

        .header_cart #cart_content_box .item_remove_btn {
            position: absolute;
            bottom: 0;
            right: 0;
            cursor: pointer;
            color: #333333;
        }

        .header_cart #cart_content_box .item_remove_btn svg {
            fill: #333333;
        }

        .header_cart #cart_content_box .item_remove_btn:hover {
            color: #6bc5b2;
        }

        .header_cart #cart_content_box .item_remove_btn:hover svg {
            fill: #6bc5b2;
        }

        .header_cart:hover .cart_content_wrap {
            display: block;
        }

        .header_cart .cart_content_wrap {
            position: absolute;
            top: 100%;
            right: 0;
            display: none;
            color: #333333;
        }

        .header_cart .cart_content_preloader {
            position: absolute;
            left: 1px;
            top: 1px;
            bottom: 1px;
            right: 1px;
            opacity: 1;
            z-index: 111;
            background-color: white;
        }

        .header_cart .cart_content_preloader .global_loader {
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            right: 0;
        }

        .header_cart .cart_content_preloader.off {
            opacity: 0;
            z-index: -1;
        }

        .template-cart #cart_content_box {
            display: none;
        }

        footer .footer_main {
            display: flex;
        }

        footer .footer_row__2 .footer_bottom_pannel {
            padding: 2px 0;
        }

        footer .footer_row__2 .footer_bottom_pannel .row {
            display: flex;
            justify-content: space-between;
        }

        footer .footer_row__2 .footer_bottom_pannel h6 {
            display: inline-block;
            letter-spacing: -0.05em;
        }

        footer .footer_row__2 .footer_bottom_pannel .footer_copyright {
            font-size: 14px;
            letter-spacing: -0.047em;
        }

        footer .footer_row__2 .footer_bottom_pannel .footer_copyright i {
            font-style: normal;
            margin: 0 10px 0 14px;
        }

        footer ul {
            list-style: none;
            padding: 0;
        }

        footer ul li a {
            display: inline-block;
            line-height: 27px;
            letter-spacing: -0.05em;
            position: relative;
        }

        footer h6 {
            text-transform: uppercase;
            letter-spacing: -1px;
        }

        footer .footer_item__links a {
            position: relative;
        }

        footer .footer_item__links a:after {
            content: "";
            position: absolute;
            width: 0;
            bottom: 0;
            left: 0;
            height: 2px;
            background: #6bc5b2;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        footer .footer_item__links a:hover:after {
            width: 100%;
        }

        footer .footer_wrap_2 {
            min-width: 300px;
        }

        footer .social_menu {
            text-align: right;
        }

        footer .footer_payments {
            text-align: center;
        }

        footer .contact_address {
            letter-spacing: -0.05em;
            line-height: 1.7em;
        }

        footer .contact_address p {
            margin: 0;
        }

        footer .contact_phone,
        footer .contact_email {
            display: block;
            letter-spacing: -0.04em;
            line-height: 1.7em;
        }

        footer .contact_phone svg,
        footer .contact_email svg {
            margin: 3px 3px 0 0;
            vertical-align: top;
        }

        footer .form_wrapper {
            display: flex;
            width: 380px;
            position: relative;
        }

        footer .form_wrapper input {
            height: 44px;
        }

        footer .form_wrapper button {
            margin-left: 10px;
            padding-left: 19px;
            padding-right: 19px;
        }

        footer .form_wrapper .errors {
            margin-bottom: 5px;
        }

        footer .form_wrapper p.alert-inline {
            margin: 10px 0 0;
            padding: 0;
            position: absolute;
            top: 100%;
            left: 0;
        }

        footer .about_text {
            margin-top: 15px;
        }

        footer .about_text p {
            margin: 0;
        }

        .footer_type_1 {
            text-align: center;
            border-top: 1px solid #e1e1e1;
        }

        .footer_type_1 .footer_main {
            padding-top: 69px;
            padding-bottom: 57px;
        }

        .footer_type_1 .footer_row__2 {
            border-top: 1px solid #e1e1e1;
        }

        .footer_type_1 .social_menu {
            padding-top: 6px;
        }

        .footer_type_1 .footer_copyright {
            text-align: left;
        }

        .footer_type_2 {
            color: #333333;
        }

        .footer_type_2 a {
            color: #8b8b8b;
        }

        .footer_type_2 a:hover {
            color: #333333;
        }

        .footer_type_2 h6 {
            color: #333333;
            text-transform: capitalize;
            letter-spacing: 0.01em;
        }

        .footer_type_2 h4 {
            color: #333333;
            font-weight: 700;
            margin-bottom: 0;
        }

        .footer_type_2 .form_text {
            margin: 3px 0 13px;
            font-size: 14px;
            letter-spacing: 0.013em;
            color: #8b8b8b;
        }

        .footer_type_2 .footer_main {
            text-align: center;
            padding: 75px 0 57px;
        }

        .footer_type_2 .footer_top_pannel {
            border-bottom: 1px solid #e1e1e1;
            padding: 30px 0;
        }

        .footer_type_2 .footer_top_pannel .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer_type_2 .footer_newsletter_form .btn:hover {
            background: #333333;
            border-color: #333333;
        }

        .footer_type_2 .footer_item__links a:after {
            background: #333333;
        }

        .footer_type_2 .footer_bottom_pannel {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer_type_2 .contact_address {
            color: #8b8b8b;
        }

        .footer_type_2 .footer_copyright {
            color: white;
        }

        .footer_type_2 .footer_copyright a {
            color: white;
        }

        .footer_type_2 .social_menu a {
            color: white;
        }

        .footer_type_2 .social_menu a:hover {
            color: #777;
        }

        .footer_type_2 .footer_row__2 {
            padding: 5px 0;
            background: #6bc5b2;
        }

        .footer_type_3 .footer_border {
            border-top: 1px solid #e1e1e1;
        }

        .footer_type_3 .footer_main {
            padding: 63px 0 65px;
        }

        .footer_type_3 .about_text {
            margin-top: 12px;
            font-size: 14px;
            line-height: 1.25em;
            letter-spacing: -0.045em;
        }

        .footer_type_3 .footer_row__2 {
            background: #333333;
            color: white;
            padding: 9px 0;
        }

        .footer_type_3 .footer_row__2 a {
            color: white;
        }

        .footer_type_3 .footer_row__2 a:hover {
            color: #777;
        }

        .footer_type_3 .footer_row__2 .footer_bottom_pannel {
            padding: 0;
        }

        .footer_type_3 .footer_item__links,
        .footer_type_3 .footer_item__contacts,
        .footer_type_3 .footer_item__instagram {
            padding-top: 6px;
        }

        .footer_type_3 .instafeed_wrap {
            margin-top: 20px;
            display: flex;
            flex-wrap: wrap;
        }

        .footer_type_3 .instagram_item {
            width: 71px;
            height: 60px;
            overflow: hidden;
            margin: 0 3px 3px 0;
        }

        .footer_type_3 .instagram_item a {
            display: block;
            line-height: 0;
        }

        .footer_type_3 .instagram_item img {
            max-width: 100%;
        }

        .footer_type_3 .footer_bottom_pannel {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer_type_3 .footer_menu {
            margin: 0;
            text-align: center;
        }

        .footer_type_3 .footer_menu li {
            display: inline-block;
            margin: 0 9px;
        }

        .footer_type_3 .social_menu {
            padding-right: 10px;
        }

        .footer_type_3 .footer_payments {
            text-align: left;
            margin-top: 30px;
        }

        .flexible_block .img_placeholder__wrap {
            background-repeat: no-repeat;
            -webkit-background-size: 100% auto;
            background-size: 100% auto;
        }

        .flexible_block .img_placeholder__small {
            padding: 56.25% 0 0 0;
        }

        .flexible_block .img_placeholder__medium {
            padding: 94.45% 0 0 0;
        }

        .flexible_block .img_placeholder__large {
            padding: 133.333333% 0 0 0;
        }

        .flexible_block__overlay {
            position: relative;
        }

        .flexible_block__overlay .layer_2 {
            padding: 15px;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 10;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: background 0.3s ease-in-out;
            -moz-transition: background 0.3s ease-in-out;
            transition: background 0.3s ease-in-out;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .flexible_block__overlay .layer_2 > div {
            width: 100%;
        }

        .quantity_box {
            height: 20px;
            position: relative;
            width: 100px;
            display: inline-block;
        }

        .quantity_box input {
            width: 26px;
            height: 24px;
            display: inline-block;
            padding: 0;
            background: none;
            border: 1px solid #e1e1e1 !important;
            font-size: 15px;
            text-align: center;
            line-height: 21px;
            background: white;
            -webkit-box-shadow: none !important;
            -moz-box-shadow: none !important;
            box-shadow: none !important;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
        }

        .quantity_box span {
            width: 26px;
            height: 24px;
            border: 1px solid #e1e1e1;
            text-align: center;
            cursor: pointer;
            display: inline-block;
        }

        .quantity_box span i {
            font-size: 14px;
            line-height: 22px;
        }

        .quantity_box .quantity_down,
        .quantity_box .quantity_up {
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: color 0.3s ease-in-out;
            -moz-transition: color 0.3s ease-in-out;
            transition: color 0.3s ease-in-out;
        }

        .quantity_box .quantity_down:hover,
        .quantity_box .quantity_up:hover {
            color: #6bc5b2;
        }

        .quantity_box .btn {
            width: 100%;
            height: 44px;
            display: block;
            padding: 0 10px;
            line-height: 40px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }

        #back_top {
            width: 50px;
            height: 50px;
            display: block;
            background: #333333;
            font: 20px/47px "FontAwesome";
            color: white;
            text-align: center;
            position: fixed;
            right: 60px;
            bottom: 60px;
            z-index: 999;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: opacity 0.3s ease-in-out;
            -moz-transition: opacity 0.3s ease-in-out;
            transition: opacity 0.3s ease-in-out;
            display: none;
            opacity: 0.6;
        }

        #back_top:hover {
            opacity: 1;
        }

        .linklist_menu_item .linklist_title {
            position: relative;
            padding-right: 30px;
        }

        .linklist_menu_item .menu_trigger {
            position: absolute;
            top: 50%;
            right: 5px;
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            margin-top: -15px;
            cursor: pointer;
            display: none;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: all 0.6s ease-in-out;
            -moz-transition: all 0.6s ease-in-out;
            transition: all 0.6s ease-in-out;
        }

        .linklist_menu_item.open .menu_trigger {
            transform: rotate(180deg);
        }

        .section_map {
            margin: 0;
            position: relative;
        }

        .section_map .map_wrapper {
            overflow: hidden;
            position: relative;
            z-index: 1;
        }

        .section_map .map_container {
            position: absolute;
            top: 0;
            right: -44%;
            bottom: 0;
            left: 0;
            z-index: 1;
        }

        .section_map .map_captions__off {
            right: 0;
        }

        .section_map .map_wrapper__small {
            padding: 19.53% 0 0 0;
        }

        .section_map .map_wrapper__medium {
            padding: 29.29% 0 0 0;
        }

        .section_map .map_wrapper__large {
            padding: 39.06% 0 0 0;
        }

        .section_featured-products .section_heading {
            font-size: 20px;
            font-weight: 800;
            letter-spacing: 0.01em;
        }

        .section_featured-products .layout_boxed .product_limit_3 {
            justify-content: center;
        }

        .section_featured-products .view_all__wrap {
            text-align: center;
            margin-top: 22px;
        }

        .section_featured-products .view_all__wrap .btn {
            background: transparent;
            color: #333333;
            border: none;
            border-bottom: 1px solid #333333;
            border-radius: 0;
            font-size: 16px;
            font-weight: 500;
            padding: 0;
        }

        .section_featured-products .view_all__wrap .btn:hover {
            color: #6bc5b2;
            border-color: #6bc5b2;
        }

        .index_section_blog-articles .article_item {
            position: relative;
        }

        .index_section_blog-articles .article_image {
            line-height: 0;
        }

        .index_section_blog-articles .article_info {
            margin: 5px 0;
            color: #333333;
        }

        .index_section_blog-articles .article_title {
            margin: 10px 0;
        }

        .index_section_blog-articles .article_content {
            margin: 5px 0;
            color: #333333;
        }

        .index_section_blog-articles .article_item__overlay .article_caption {
            display: block;
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            padding: 25px 25px;
            text-align: left;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            align-items: flex-start;
        }

        .index_section_blog-articles .img_placeholder__wrap {
            padding: 74.325% 0 0 0;
        }

        .index_section_blog-articles .col-10 {
            margin: 0 auto;
            text-align: center;
        }

        .index_section_blog-articles .col-10 .article_item__overlay .article_caption {
            align-items: center;
            text-align: center;
        }

        .index_section_blog-articles .col-10 .article_item__normal .article_image {
            margin-top: 25px;
        }

        .index_section_blog-articles .col-10 .article_item__normal .article_content {
            margin-top: 30px;
        }

        .index_section_blog-articles .col-10 .article_item__normal .article_btn {
            margin-top: 6px;
        }

        .index_section_blog-articles .col-sm-6 .article_item__normal .article_caption, .index_section_blog-articles .col-sm-4 .article_item__normal .article_caption {
            margin-top: 20px;
        }

        .index_section_blog-articles .col-sm-6 .article_item__normal .article_caption .article_btn, .index_section_blog-articles .col-sm-4 .article_item__normal .article_caption .article_btn {
            margin-top: 10px;
        }

        .index_section_blog-articles .article_content {
            max-width: 760px;
            margin-right: auto;
            margin-left: auto;
        }

        .section_featured-with-banners .section_heading {
            font-size: 20px;
            font-weight: 800;
            letter-spacing: 0.01em;
            margin-bottom: 30px;
        }

        .section_featured-with-banners .row_big {
            margin-right: -15px;
            margin-left: -15px;
        }

        .section_featured-with-banners .banner_item {
            position: relative;
            width: 33.333%;
            padding-right: 13px;
            float: left;
        }

        .section_featured-with-banners .banner_item .img_placeholder__wrap {
            padding: 149.876% 0 0 0;
        }

        .section_featured-with-banners .caption_text {
            position: absolute;
            top: 45%;
            left: 0;
            right: 0;
            text-align: center;
        }

        .section_featured-with-banners .caption_text .text {
            font-size: 24px;
            color: #333333;
            font-weight: 700;
            line-height: 0;
        }

        .section_featured-with-banners .caption_text .text strong {
            font-size: 20px;
            font-weight: 700;
            color: #6bc5b2;
            margin-left: 80px;
            letter-spacing: 0.01em;
        }

        .section_featured-with-banners .caption_text .text em {
            font-size: 60px;
            font-style: normal;
            color: #6bc5b2;
            font-weight: 900;
        }

        .section_featured-with-banners .product_listing__main {
            width: 66.666%;
        }

        .section_featured-with-banners .product_listing__main .bade_wrap {
            top: 0;
        }

        .section_featured-with-banners .product_listing__main .product_badge {
            padding: 2px 5px;
            margin: 3px 0;
            font-size: 10px;
        }

        .section_featured-with-banners .product_listing__main .product_item {
            margin: 5px 0 10px 0;
            padding: 10px 0;
        }

        .section_featured-with-banners .product_listing__main .product_item:hover {
            box-shadow: 0px 3px 10px 5px #f1f1f1;
            border: none;
        }

        .section_featured-with-banners .product_listing__main .product_item:hover .product_color {
            opacity: 1;
            top: -30px;
        }

        .section_featured-with-banners .product_listing__main .product_name {
            line-height: 1.5em;
            padding: 10px 10px 0;
        }

        .section_featured-with-banners .product_listing__main .product_price {
            margin: 0 0 0 10px;
        }

        .section_featured-with-banners .product_listing__main .product_links .product_links__subbutton {
            top: 0;
        }

        .section_featured-with-banners .product_listing__main .product_links .add_to_cart_form .btn {
            margin-top: 0;
            padding: 5px 10px;
            font-size: 13px;
        }

        .section_featured-with-banners .product_listing__main .product_links .quick_view_btn,
        .section_featured-with-banners .product_listing__main .product_links .wishlist_btn {
            width: 20px;
            height: 20px;
            margin-bottom: 10px;
            line-height: 20px;
        }

        .section_featured-with-banners .product_listing__main .product_color .color_options {
            width: 25px;
            height: 25px;
            margin: 5px;
        }

        .section_featured-with-banners .with_bg {
            padding: 20px 30px;
        }

        .section_featured-with-banners .item_3_1 {
            clear: left;
        }

        .product_carousel_wrap .product_listing__main .product_links .add_to_cart_form .btn {
            margin-top: -15px;
        }

        .product_carousel_wrap .swiper-slide {
            width: 20%;
        }

        .product_carousel_wrap .swiper_pagination {
            text-align: center;
            margin: 25px 0 20px;
        }

        .product_carousel_wrap .swiper_pagination span {
            margin: 0 5px;
            width: 10px;
            height: 10px;
            vertical-align: middle;
        }

        .product_carousel_wrap .swiper_pagination .swiper-pagination-bullet-active {
            width: 14px;
            height: 14px;
        }

        .section_lookbook {
            padding: 0;
        }

        .lookbook_wrap {
            position: relative;
            z-index: 1;
        }

        .lookbook_wrap .img_placeholder__wrap {
            background-position: 50% 50%;
            padding: 37.607% 0 0 0;
            background-repeat: no-repeat;
            -webkit-background-size: 100% auto;
            background-size: 100% auto;
        }

        .lookbook_container {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
        }

        .lookbook_item {
            width: 15px;
            height: 15px;
            margin: 0;
            position: absolute;
            z-index: 0;
        }

        .lookbook_item__bullet {
            width: 15px;
            height: 15px;
            display: block;
            background: black;
            font-size: 10px;
            line-height: 16px;
            color: white;
            text-align: center;
            cursor: pointer;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            -webkit-box-shadow: 0 0 12px 0 rgba(0, 0, 0, 0.25), 0 0 0 0 rgba(255, 255, 255, 0.4);
            -moz-box-shadow: 0 0 12px 0 rgba(0, 0, 0, 0.25), 0 0 0 0 rgba(255, 255, 255, 0.4);
            box-shadow: 0 0 12px 0 rgba(0, 0, 0, 0.25), 0 0 0 0 rgba(255, 255, 255, 0.4);
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: box-shadow 0.3s ease-in-out;
            -moz-transition: box-shadow 0.3s ease-in-out;
            transition: box-shadow 0.3s ease-in-out;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .lookbook_item__caption {
            width: 110px;
            display: block;
            background: white;
            position: absolute;
            top: 80%;
            left: 80%;
            z-index: -1;
            opacity: 0;
            display: none;
            padding: 5px;
            -webkit-box-shadow: 0 0 12px 0 rgba(0, 0, 0, 0.25);
            -moz-box-shadow: 0 0 12px 0 rgba(0, 0, 0, 0.25);
            box-shadow: 0 0 12px 0 rgba(0, 0, 0, 0.25);
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: box-shadow 0.3s ease-in-out, opacity 0.3s ease-in-out;
            -moz-transition: box-shadow 0.3s ease-in-out, opacity 0.3s ease-in-out;
            transition: box-shadow 0.3s ease-in-out, opacity 0.3s ease-in-out;
        }

        .lookbook_item__caption .product_name {
            display: block;
            font-size: 10px;
            line-height: 1.2em;
        }

        .lookbook_item__caption .money {
            font-size: 12px;
            color: #333333;
        }

        .caption_left.caption_top .lookbook_item__caption {
            left: auto;
            right: 80%;
            top: auto;
            bottom: 80%;
        }

        .caption_left.caption_bottom .lookbook_item__caption {
            left: auto;
            right: 80%;
        }

        .caption_right.caption_top .lookbook_item__caption {
            top: auto;
            bottom: 80%;
        }

        .lookbook_item:hover {
            z-index: 10;
        }

        .lookbook_item:hover .lookbook_item__bullet {
            background: #6bc5b2;
            color: white;
            -webkit-box-shadow: 0 0 12px 0 rgba(0, 0, 0, 0.25), 0 0 0 5px rgba(51, 51, 51, 0.4);
            -moz-box-shadow: 0 0 12px 0 rgba(0, 0, 0, 0.25), 0 0 0 5px rgba(51, 51, 51, 0.4);
            box-shadow: 0 0 12px 0 rgba(0, 0, 0, 0.25), 0 0 0 5px rgba(51, 51, 51, 0.4);
        }

        .lookbook_item:hover .lookbook_item__caption {
            opacity: 1;
            display: block;
        }

        .section_image-with-text .item_txt {
            padding-right: 5%;
            padding-top: 32px;
        }

        .section_image-with-text .item_txt h2 {
            font-weight: 900;
            line-height: 1em;
        }

        .section_image-with-text .item_txt h2 + p {
            margin-top: 26px;
        }

        .section_image-with-text .item_txt p + div {
            margin-top: 25px;
        }

        .index-section-slideshow {
            display: flex;
            justify-content: center;
        }

        .section_slideshow {
            margin: 0;
            background: white;
            position: relative;
        }

        .section_slideshow .swiper-slide,
        .section_slideshow .slideshow_image {
            width: 100%;
            min-width: 100%;
        }

        .section_slideshow .image_slide {
            line-height: 0;
        }

        .section_slideshow .img_placeholder__wrap {
            background-position: 0 0;
            -webkit-background-size: 100% auto;
            background-size: 100% auto;
        }

        .section_slideshow .img_placeholder__small {
            padding: 33.15% 0 0 0;
        }

        .section_slideshow .img_placeholder__medium {
            padding: 38.6745% 0 0 0;
        }

        .section_slideshow .img_placeholder__large {
            padding: 44.199% 0 0 0;
        }

        .section_slideshow .slide_caption__subheader {
            font-size: 16px;
            font-weight: 800;
            margin: 0;
        }

        .section_slideshow h2 {
            font-size: 60px;
            font-weight: 900;
            line-height: 1em;
            margin: 15px 0 18px;
            text-transform: uppercase;
            color: #6bc5b2;
        }

        .section_slideshow p {
            line-height: 1em;
        }

        .section_slideshow .inverted h2 {
            color: white;
        }

        .section_slideshow .inverted p {
            color: white;
        }

        .section_slideshow .swiper_btn__prev {
            left: 43px;
        }

        .section_slideshow .swiper_btn__next {
            right: 43px;
        }

        .section_slideshow .slider_btn {
            margin: 14px 2px 0;
            min-width: 126px;
        }

        .section_slideshow .slide_caption {
            display: block;
            padding: 40px 80px;
            color: inherit;
            text-align: center;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            display: flex;
            align-items: center;
        }

        .section_slideshow .position_left {
            justify-content: flex-start;
            text-align: left;
        }

        .section_slideshow .position_center {
            justify-content: center;
        }

        .section_slideshow .position_right {
            justify-content: flex-end;
            text-align: left;
            left: 50%;
        }

        .section_slideshow .swiper_pagination {
            z-index: 1;
        }

        .section_slideshow .swiper_pagination.swiper-pagination-progressbar {
            bottom: 0px;
        }

        .section_slideshow .slide_video .inlinePlayButton {
            display: none !important;
        }

        .section_slideshow .tablet .swiper_pagination, .section_slideshow .mobile .swiper_pagination {
            display: none;
        }

        .section_slideshow .swiper_pagination {
            text-align: center;
            bottom: 25px;
            width: 96%;
        }

        .section_slideshow .swiper-pagination-bullet {
            opacity: 1;
            background: transparent;
            border: 1px solid #6bc5b2;
        }

        .section_slideshow .swiper-pagination-bullet:before {
            content: "";
            display: block;
            background: #6bc5b2;
            height: 1px;
            width: 9px;
            position: relative;
            top: 50%;
            left: -9px;
        }

        .section_slideshow .swiper-pagination-bullet:first-child:before {
            display: none;
        }

        .section_slideshow .swiper-pagination-bullet-active {
            background: #6bc5b2;
        }

        .section_slideshow .swiper_btn {
            display: none;
        }

        .swiper-container-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet {
            vertical-align: middle;
        }

        .inline-YTPlayer {
            position: absolute !important;
            max-width: 1810px !important;
            width: 100%;
            top: 0;
            bottom: 0;
        }

        .section_slideshow-custom {
            margin: 30px 0;
        }

        .section_slideshow-custom .container {
            display: flex;
        }

        .section_slideshow-custom .slider_right {
            width: 83%;
            order: 2;
            display: flex;
            flex-direction: column;
        }

        .section_slideshow-custom .section_slider {
            width: 100%;
            float: left;
        }

        .section_slideshow-custom .linklist_block {
            width: 17%;
            float: left;
            padding-right: 15px;
            order: 1;
        }

        .section_slideshow-custom .linklist_title {
            padding: 0;
            margin: 0;
            color: #6bc5b2;
            text-transform: capitalize;
            font-size: 20px;
            line-height: 1.5em;
            font-weight: bold;
        }

        .section_slideshow-custom .menu_wrap {
            height: 100%;
            background: white;
        }

        .section_slideshow-custom .menu_wrap ul {
            padding: 0 0 0 15px;
            list-style-type: disc;
        }

        .section_slideshow-custom .link_item {
            padding: 3px 0 2px;
            border-bottom: none;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 0.01em;
            color: #6bc5b2;
        }

        .section_slideshow-custom .link_item a {
            color: #333333;
        }

        .section_slideshow-custom .img_placeholder__wrap {
            background-position: 50% 50%;
            padding: 49% 0 0 0;
            -webkit-background-size: cover;
            background-size: cover;
        }

        .section_slideshow-custom .simple_text {
            color: #333333;
            font-size: 16px;
            font-weight: 800;
            text-transform: inherit;
            margin-top: 10px;
            line-height: 1.2em;
            margin: 5px 0;
        }

        .section_slideshow-custom h2 {
            font-size: 60px;
            font-weight: 900;
            text-transform: uppercase;
            line-height: 1em;
            margin: 10px 0 0;
            letter-spacing: 0.01em;
        }

        .section_slideshow-custom .btn {
            margin-top: 20px;
            font-size: 14px;
            padding: 10px 27px;
            font-weight: 800;
        }

        .section_slideshow-custom .slide_caption {
            display: block;
            padding: 25px 55px;
            color: inherit;
            text-align: left;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        .section_slideshow-custom .slide_caption .inverted .title, .section_slideshow-custom .slide_caption .inverted .simple_text {
            color: white;
        }

        .section_slideshow-custom .swiper_pagination {
            text-align: right;
            bottom: 25px;
            width: 96%;
        }

        .section_slideshow-custom .swiper-pagination-bullet {
            opacity: 1;
            background: transparent;
            border: 1px solid #6bc5b2;
        }

        .section_slideshow-custom .swiper-pagination-bullet:before {
            content: "";
            display: block;
            background: #6bc5b2;
            height: 1px;
            width: 9px;
            position: relative;
            top: 50%;
            left: -9px;
        }

        .section_slideshow-custom .swiper-pagination-bullet:first-child:before {
            display: none;
        }

        .section_slideshow-custom .swiper-pagination-bullet-active {
            background: #6bc5b2;
        }

        .section_slideshow-custom .swiper_btn {
            display: none;
        }

        .section_map .map_captions__wrapper {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 10;
            pointer-events: none;
        }

        .section_map .container {
            height: 100%;
            position: relative;
        }

        .section_map .wrap_1 {
            height: 100%;
            text-align: left;
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        .section_map .wrap_2 {
            width: 28%;
            pointer-events: auto;
        }

        .section_map .map_captions {
            padding: 18px;
            background: white;
            border-radius: 5px;
            -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        }

        .section_map .map_captions__title {
            margin: 0;
            font-size: 14px;
            letter-spacing: -0.04em;
            border-bottom: 1px solid #e1e1e1;
            line-height: 1.15em;
            padding-bottom: 17px;
        }

        .section_map .map_captions__text p {
            font-size: 14px;
            letter-spacing: -0.04em;
            margin: 0;
        }

        .section_map a {
            font-size: 14px;
            letter-spacing: -0.04em;
            margin-top: 12px;
            display: block;
        }

        .section_map .map_captions__btn {
            margin: 15px 0 0 0;
        }

        .index_section_testimonials blockquote {
            margin: 0;
        }

        .index_section_testimonials cite {
            font-style: normal;
            font-weight: bold;
            color: #333333;
        }

        .index_section_testimonials .testimonials_caption {
            margin-bottom: 14px;
            text-align: center;
        }

        .index_section_testimonials .swiper_pagination {
            margin-top: 34px;
        }

        .index_section_testimonials .swiper_pagination .swiper-pagination-bullet {
            vertical-align: middle;
            margin: 0 10px;
        }

        .index_section_testimonials .testimonial_slide__item {
            margin-left: auto;
            margin-right: auto;
        }

        .index_section_testimonials .testimonial_slide__item.style_type_1 {
            max-width: 740px;
            text-align: center;
        }

        .index_section_testimonials .testimonial_slide__item.style_type_1 .testimonials_item__stars {
            margin-top: 16px;
        }

        .index_section_testimonials .testimonial_slide__item.style_type_1 .testimonials_item__text {
            font-size: 24px;
            line-height: 1.2em;
            margin: 14px 0 20px;
        }

        .index_section_testimonials .testimonial_slide__item.style_type_2 {
            max-width: 580px;
            text-align: left;
            padding: 50px 40px;
            background: black;
            color: white;
        }

        .index_section_testimonials .testimonial_slide__item.style_type_2 cite {
            color: white;
            font-weight: normal;
        }

        .index_section_testimonials .testimonial_slide__item.style_type_2 blockquote {
            font-weight: bold;
        }

        .index_section_testimonials .testimonial_slide__item.style_type_3 {
            max-width: 1180px;
            text-align: center;
            background: #e4e4e4;
            padding: 42px 80px;
        }

        .index_section_testimonials .testimonial_slide__item.style_type_3 .testimonials_item__text {
            max-width: 760px;
            margin-left: auto;
            margin-right: auto;
            color: white;
            font-size: 22px;
            line-height: 1.3em;
            letter-spacing: -0.2px;
        }

        .section_banners_full_width .banner_100 .img_placeholder__wrap {
            padding: 38.6745% 0 0 0;
        }

        .section_banners_full_width .banner_100 h2 {
            font-size: 60px;
        }

        .section_banners_full_width .banner_100 .btn {
            min-width: 126px;
            margin: 17px 3px 7px;
        }

        .section_banners_full_width .banner_66 .img_placeholder__wrap {
            padding: 58.497% 0 0 0;
        }

        .section_banners_full_width .banner_50 .img_placeholder__wrap {
            padding: 78.652% 0 0 0;
        }

        .section_banners_full_width .banner_50 .banner_text {
            margin-bottom: 25px;
        }

        .section_banners_full_width .banner_33 .img_placeholder__wrap {
            padding: 120.002% 0 0 0;
        }

        .section_banners_full_width .section_heading {
            margin-bottom: 35px;
        }

        .section_banners_full_width .banner_item {
            position: relative;
            line-height: 0;
        }

        .section_banners_full_width .hover_image {
            overflow: hidden;
        }

        .section_banners_full_width .hover_image img {
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: transform 0.4s ease-in-out;
            -moz-transition: transform 0.4s ease-in-out;
            transition: transform 0.4s ease-in-out;
        }

        .section_banners_full_width .hover_image:hover img {
            transform: scale(1.05);
        }

        .section_banners_full_width .btn {
            padding: 10px 20px;
        }

        .section_banners_full_width .caption_text {
            display: block;
        }

        .section_banners_full_width .banner_caption {
            line-height: 1em;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 15px 35px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .section_banners_full_width .banner_caption h2 {
            text-transform: uppercase;
            margin: 15px 0;
            line-height: 1em;
            letter-spacing: -0.05em;
        }

        .section_banners_full_width .banner_caption h4 {
            font-size: 16px;
            letter-spacing: -0.05em;
        }

        .section_banners_full_width .banner_caption.style_minimal {
            text-align: left;
            padding: 30px 50px;
        }

        .section_banners_full_width .banner_caption.style_minimal .caption_text {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-end;
        }

        .section_banners_full_width .banner_caption.style_minimal .banner_text {
            position: relative;
            font-weight: bold;
            display: inline-block;
            color: #333333;
        }

        .section_banners_full_width .banner_caption.style_minimal .banner_text:after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 0;
            height: 2px;
            background: #333333;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
        }

        .section_banners_full_width .banner_caption.style_minimal .btn {
            margin-bottom: 19px;
        }

        .section_banners_full_width .banner_caption.style_minimal .inverted .banner_text {
            color: white;
        }

        .section_banners_full_width .banner_caption.style_minimal .inverted .banner_text:after {
            background: white;
        }

        .section_banners_full_width .banner_caption.style_minimal .inverted .btn {
            color: #ffffff;
            background: white;
            border-color: white;
        }

        .section_banners_full_width .banner_caption.style_minimal .inverted .btn:hover {
            background: #6bc5b2;
            border-color: #6bc5b2;
            color: #ffffff;
        }

        .section_banners_full_width .style_minimal a.caption_text:hover .banner_text:after {
            width: 100%;
        }

        .section_banners .banner_100 {
            margin-bottom: 20px;
        }

        .section_banners .banner_100 .img_placeholder__wrap {
            padding: 38.6745% 0 0 0;
        }

        .section_banners .banner_100 h2 {
            font-size: 36px;
            font-weight: 800;
        }

        .section_banners .banner_100 .btn {
            min-width: 126px;
            margin: 20px 3px 5px;
            color: #333333;
            background: white;
            border-color: white;
        }

        .section_banners .banner_100 .btn:hover {
            background: #6bc5b2;
            border-color: #6bc5b2;
            color: #ffffff;
        }

        .section_banners .banner_66 .img_placeholder__wrap {
            padding: 58.497% 0 0 0;
        }

        .section_banners .banner_50 .img_placeholder__wrap {
            padding: 78.652% 0 0 0;
        }

        .section_banners .banner_50 .banner_text {
            margin-bottom: 25px;
        }

        .section_banners .banner_33 .img_placeholder__wrap {
            padding: 120.002% 0 0 0;
        }

        .section_banners .section_heading {
            margin-bottom: 35px;
        }

        .section_banners .banner_item {
            position: relative;
            line-height: 0;
        }

        .section_banners .hover_image {
            overflow: hidden;
        }

        .section_banners .hover_image img {
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: transform 0.4s ease-in-out;
            -moz-transition: transform 0.4s ease-in-out;
            transition: transform 0.4s ease-in-out;
        }

        .section_banners .hover_image:hover img {
            transform: scale(1.05);
        }

        .section_banners .btn {
            padding: 10px 20px;
        }

        .section_banners .caption_text {
            display: block;
        }

        .section_banners .banner_caption {
            line-height: 1em;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 15px 75px;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            text-align: left;
        }

        .section_banners .banner_caption h2 {
            margin: 5px 0;
            line-height: 1em;
            letter-spacing: 0.01em;
        }

        .section_banners .banner_caption h4 {
            font-size: 16px;
            letter-spacing: 0.01em;
        }

        .section_banners .banner_caption.style_minimal {
            text-align: left;
            padding: 30px 50px;
        }

        .section_banners .banner_caption.style_minimal .caption_text {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-end;
        }

        .section_banners .banner_caption.style_minimal .banner_text {
            position: relative;
            font-size: 18px;
            font-weight: bold;
            display: inline-block;
            color: #333333;
        }

        .section_banners .banner_caption.style_minimal .banner_text:after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 0;
            height: 2px;
            background: #333333;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
        }

        .section_banners .banner_caption.style_minimal .btn {
            margin-bottom: 19px;
        }

        .section_banners .banner_caption.style_minimal .inverted .banner_text {
            color: white;
        }

        .section_banners .banner_caption.style_minimal .inverted .banner_text:after {
            background: white;
        }

        .section_banners .banner_caption.style_minimal .inverted .btn {
            color: #ffffff;
            background: white;
            border-color: white;
        }

        .section_banners .banner_caption.style_minimal .inverted .btn:hover {
            background: #6bc5b2;
            border-color: #6bc5b2;
            color: #ffffff;
        }

        .section_banners .style_minimal a.caption_text:hover .banner_text:after {
            width: 100%;
        }

        .section_newsletter {
            text-align: center;
        }

        .section_newsletter h4 {
            letter-spacing: -1.1px;
        }

        .section_newsletter .form_text {
            margin-top: 20px;
            letter-spacing: -0.75px;
        }

        .section_newsletter .form_wrapper {
            margin-top: 26px;
            max-width: 370px;
        }

        .section_newsletter .item__newsletter {
            padding: 60px 0 60px;
        }

        .section_newsletter .form_wrapper {
            max-width: 380px;
            margin-right: auto;
            margin-left: auto;
            display: flex;
            position: relative;
        }

        .section_newsletter p.alert-inline {
            margin: 0;
            padding: 0;
            position: absolute;
            top: 50px;
            left: 0;
        }

        .section_newsletter .btn {
            margin-left: 10px;
        }

        .section_newsletter input {
            height: 44px;
        }

        .index_section_gallery .item_caption {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            padding: 40px 50px;
            display: flex;
            justify-content: center;
            align-items: flex-end;
            text-align: center;
        }

        .index_section_gallery .item_caption h4 {
            text-transform: inherit;
            position: relative;
            font-size: 18px;
            font-weight: bold;
            line-height: 120%;
            letter-spacing: 0.01em;
        }

        .index_section_gallery .item_caption h4:hover {
            color: #6bc5b2;
        }

        .index_section_gallery .item_caption h4:after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 0;
            height: 2px;
            background: #6bc5b2;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: width 0.3s ease-in-out;
            -moz-transition: width 0.3s ease-in-out;
            transition: width 0.3s ease-in-out;
        }

        .index_section_gallery .item_caption h4:hover:after {
            width: 100%;
        }

        .section_template__collections-listing {
            padding: 5px 0 0;
        }

        .section_template__collections-listing .page_heading {
            margin: 67px 0 25px;
            font-size: 20px;
            font-weight: 800;
            letter-spacing: 0;
        }

        .section_template__collection .collection_info {
            position: relative;
            margin-bottom: 30px;
        }

        .section_template__collection .collection_img__overlay {
            line-height: 0;
        }

        .section_template__collection .collection_img__overlay .collection_text {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 34px 40px;
            display: flex;
            align-items: flex-end;
        }

        .section_template__collection .collection_img__overlay .collection_title {
            font-size: 40px;
            text-transform: uppercase;
            font-weight: bold;
            margin: 0 0;
            letter-spacing: -0.07em;
            line-height: 1.4em;
        }

        .section_template__collection .collection_img__overlay .inverted .collection_title {
            color: white;
        }

        .section_template__collection .collection_img__none .collection_text {
            position: relative;
            padding: 30px 0 0;
        }

        .section_template__collection .collection_img__none .collection_title {
            font-size: 20px;
            text-transform: inherit;
            font-weight: bold;
            margin: 0 0;
            letter-spacing: 0.01em;
            line-height: 1.4em;
        }

        .section_template__collection .collection_img__none .collection_desc {
            max-width: 59%;
            color: #333333;
            letter-spacing: -0.044em;
            line-height: 1.3em;
        }

        .section_template__collection .collection_img__none .inverted .collection_title,
        .section_template__collection .collection_img__none .inverted .collection_desc {
            color: white;
        }

        .section_template__collection .button_filters {
            margin-top: 30px;
        }

        .section_template__collection .button_filters ul {
            list-style: none;
            padding: 0;
        }

        .section_template__collection .product_options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
        }

        .section_template__collection .product_count {
            font-size: 16px;
            letter-spacing: -0.05em;
        }

        .section_template__collection .product_options__sort label {
            font-weight: bold;
            font-size: 16px;
            letter-spacing: -0.04em;
        }

        .section_template__collection .product_options__sort select {
            width: 164px;
            display: inline-block;
            vertical-align: middle;
            border: transparent;
            font-size: 16px;
            padding-left: 4px;
            letter-spacing: -0.05em;
        }

        .section_template__collection .product_view {
            width: 30%;
            list-style: none;
            padding: 0;
            margin: 0;
            text-align: left;
        }

        .section_template__collection .product_view li {
            display: inline-block;
            cursor: pointer;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: transform 0.2s ease-in-out;
            -moz-transition: transform 0.2s ease-in-out;
            transition: transform 0.2s ease-in-out;
        }

        .section_template__collection .product_view li svg {
            fill: #ccc;
        }

        .section_template__collection .product_view li:hover {
            transform: scale(1.1);
        }

        .section_template__collection .product_view .active svg {
            fill: #6bc5b2;
        }

        .section_template__collection .product_view li ~ li {
            margin-left: 10px;
        }

        .section_template__product {
            padding-top: 40px;
        }

        .section_template__product p {
            margin: 0;
        }

        .section_template__product .spr-badge {
            margin: 20px 0;
        }

        .section_template__product .spr-badge .spr-icon {
            margin-right: 4px;
        }

        .section_template__product .single_product__title {
            font-size: 24px;
            font-weight: normal;
            letter-spacing: -0.045em;
            margin: 0;
        }

        .section_template__product .single_product__price {
            margin: 20px 0 3px;
        }

        .section_template__product .single_product__price .money, .section_template__product .single_product__price .money_main {
            margin-bottom: 5px;
            display: block;
            font-size: 30px;
            font-weight: bold;
            letter-spacing: -0.035em;
        }

        .section_template__product .single_product__short_desk {
            line-height: 1.4em;
            letter-spacing: 0.005em;
            margin: 18px 0 37px;
            color: #333333;
        }

        .section_template__product .single_product__options {
            margin-bottom: 20px;
        }

        .section_template__product .single_product__options label {
            display: block;
            margin-bottom: 3px;
            font-size: 16px;
            font-weight: bold;
        }

        .section_template__product .single_product__options select {
            height: 44px;
        }

        .section_template__product .color_product__options,
        .section_template__product .size_product__options {
            margin-bottom: 20px;
        }

        .section_template__product .color_product__options label,
        .section_template__product .size_product__options label {
            display: block;
            margin-bottom: 3px;
            font-size: 16px;
            font-weight: bold;
        }

        .section_template__product .color_product__options .color_item,
        .section_template__product .color_product__options .size_item,
        .section_template__product .size_product__options .color_item,
        .section_template__product .size_product__options .size_item {
            display: inline-block;
            margin: 0 10px 10px 0;
        }

        .section_template__product .color_product__options .color_item.current,
        .section_template__product .color_product__options .size_item.current,
        .section_template__product .size_product__options .color_item.current,
        .section_template__product .size_product__options .size_item.current {
            padding: 2px;
            border: 2px solid #222;
            border-radius: 5px;
        }

        .section_template__product .color_product__options .color_item.current .color_inner,
        .section_template__product .color_product__options .size_item.current .color_inner,
        .section_template__product .size_product__options .color_item.current .color_inner,
        .section_template__product .size_product__options .size_item.current .color_inner {
            width: 36px;
            height: 36px;
        }

        .section_template__product .color_product__options .color_item.current .size_inner,
        .section_template__product .color_product__options .size_item.current .size_inner,
        .section_template__product .size_product__options .color_item.current .size_inner,
        .section_template__product .size_product__options .size_item.current .size_inner {
            min-width: 55px;
            height: 45px;
            line-height: 45px;
        }

        .section_template__product .color_product__options .color_inner,
        .section_template__product .size_product__options .color_inner {
            display: block;
            border: 1px solid #ccc;
            width: 42px;
            height: 42px;
            border-radius: 5px;
        }

        .section_template__product .color_product__options .size_inner,
        .section_template__product .size_product__options .size_inner {
            display: block;
            border: 1px solid #ccc;
            min-width: 55px;
            height: 45px;
            line-height: 45px;
            text-align: center;
            border-radius: 5px;
        }

        .section_template__product .single_product__sku,
        .section_template__product .single_product__availability,
        .section_template__product .single_product__vendor,
        .section_template__product .single_product__type,
        .section_template__product .single_product__barcode,
        .section_template__product .single_product__weight,
        .section_template__product .single_product__tags,
        .section_template__product .single_product__collections {
            font-size: 12px;
            line-height: 1.4em;
            margin-bottom: 11px;
            letter-spacing: 0.02em;
            font-weight: 800;
        }

        .section_template__product .single_product__sku b,
        .section_template__product .single_product__availability b,
        .section_template__product .single_product__vendor b,
        .section_template__product .single_product__type b,
        .section_template__product .single_product__barcode b,
        .section_template__product .single_product__weight b,
        .section_template__product .single_product__tags b,
        .section_template__product .single_product__collections b {
            color: #333333;
        }

        .section_template__product .single_product__sku span,
        .section_template__product .single_product__availability span,
        .section_template__product .single_product__vendor span,
        .section_template__product .single_product__type span,
        .section_template__product .single_product__barcode span,
        .section_template__product .single_product__weight span,
        .section_template__product .single_product__tags span,
        .section_template__product .single_product__collections span {
            color: #333333;
        }

        .section_template__product .single_product__quantity {
            margin-top: 25px;
        }

        .section_template__product .single_product__quantity label {
            display: block;
            font-size: 15px;
            line-height: 1.4em;
            font-weight: bold;
            color: #333333;
            margin-bottom: 3px;
        }

        .section_template__product .single_product__quantity input {
            width: 120px;
            height: 44px;
            border-radius: 5px;
            border: 1px solid #e1e1e1;
            line-height: 40px;
            text-align: left;
            padding: 5px 15px;
            margin-right: 10px;
        }

        .section_template__product .single_product__quantity .quantity_box {
            display: flex;
            height: auto;
            width: 100%;
        }

        .section_template__product .single_product__quantity .btn_alt {
            height: 44px;
            border-radius: 5px;
            line-height: 44px;
        }

        .section_template__product .single_product__quantity .btn_alt svg {
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: all 0.2s ease-in-out;
            -moz-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            fill: #333333;
        }

        .section_template__product .single_product__quantity .btn_alt:hover svg {
            fill: #ffffff;
        }

        .section_template__product .single_product__quantity .btn_alt[disabled] svg {
            fill: white;
        }

        .section_template__product .single_product__quantity .notify_btn {
            width: 100%;
            margin: 20px 0;
            line-height: 30px;
        }

        .section_template__product .product_notify .notify_form {
            display: none;
        }

        .section_template__product .product_notify form {
            margin-bottom: 20px;
        }

        .section_template__product .product_notify .form_text {
            margin-bottom: 10px;
            font-size: 14px;
            color: #333333;
        }

        .section_template__product .product_notify textarea {
            margin: 15px 0;
        }

        .section_template__product .wishlist_btn {
            font-weight: bold;
        }

        .section_template__product .wishlist_btn .btn_rem {
            display: none;
        }

        .section_template__product .wishlist_btn svg {
            display: inline-block;
            vertical-align: middle;
            width: 44px;
            height: 44px;
            border: 1px solid transparent;
            border-radius: 5px;
            padding: 10px;
            stroke: #6bc5b2;
            margin-right: 10px;
            box-shadow: 1px 2px 15px -12px #222;
            background: white;
        }

        .section_template__product .wishlist_btn[data-action="remove"] svg {
            stroke: #c92c2c;
        }

        .section_template__product .wishlist_btn[data-action="remove"] span {
            display: none;
        }

        .section_template__product .wishlist_btn[data-action="remove"] .btn_rem {
            display: inline;
        }

        .section_template__product .wishlist_btn:hover svg {
            stroke: #333333;
        }

        .section_template__product .single_product__policy {
            padding: 15px 0;
            margin: 10px 0;
        }

        .section_template__product .single_product__policy a {
            display: block;
            margin-bottom: 6px;
            font-size: 15px;
            letter-spacing: -0.05em;
        }

        .section_template__product .single_product__policy a svg {
            margin-right: 5px;
            display: inline-block;
            vertical-align: middle;
            fill: #8b8b8b;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: all 0.2s ease-in-out;
            -moz-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
        }

        .section_template__product .single_product__policy a:hover svg {
            fill: #6bc5b2;
        }

        .section_template__product .tab_content_wrapper .tab_navigation {
            padding: 20px 0 10px;
            border-bottom: 1px solid #e1e1e1;
        }

        .section_template__product .tab_content_wrapper .tab_nav {
            display: inline-block;
            cursor: pointer;
            padding: 10px 15px;
            margin: 0 10px 10px 0;
            border-radius: 5px;
            color: #333333;
            font-weight: bold;
            border: 1px solid transparent;
        }

        .section_template__product .tab_content_wrapper .tab_nav.active {
            border-color: #e1e1e1;
        }

        .section_template__product .tab_content_wrapper .tab_content {
            position: relative;
            margin: 30px 0;
        }

        .section_template__product .tab_content_wrapper .tab_item {
            display: none !important;
        }

        .section_template__product .tab_content_wrapper .tab_item.active {
            display: block !important;
        }

        .section_template__product .tab_content_wrapper .product_description img {
            margin: 15px 0;
        }

        .section_template__product .widget_related_products {
            padding: 30px 0 50px;
        }

        .section_template__product .widget_related_products h3 {
            text-align: center;
            font-size: 24px;
            font-weight: normal;
        }

        .section_template__product .widget_related_products .swiper-pagination-bullets {
            text-align: center;
            margin-top: 20px;
        }

        .section_template__product .widget_related_products .swiper-pagination-bullets span {
            margin: 0 2px;
            cursor: pointer;
            vertical-align: middle;
        }

        .section_template__product .type_carousel-horizontal .single_product__info {
            margin-top: 30px;
        }

        .section_template__product .type_carousel-horizontal .row {
            align-items: flex-start;
        }

        .section_template__product .type_carousel-horizontal .single_product__img .swiper_btn__next {
            top: 42%;
            right: 35px;
        }

        .section_template__product .type_carousel-horizontal .single_product__img .swiper_btn__prev {
            left: 35px;
            top: 42%;
        }

        .section_template__product .type_carousel-horizontal .gallery_thumbs .swiper-slide {
            line-height: 0;
        }

        .section_template__product .type_carousel-horizontal .gallery_thumbs .swiper-slide img {
            max-width: 100%;
        }

        .section_template__product .type_carousel-vertical .single_product__img {
            display: flex;
            align-items: flex-start;
        }

        .section_template__product .type_carousel-vertical .single_product__img .swiper_btn__next {
            top: 42%;
            right: 45px;
        }

        .section_template__product .type_carousel-vertical .single_product__img .swiper_btn__prev {
            left: 205px;
            top: 42%;
        }

        .section_template__product .type_carousel-vertical .gallery_big {
            width: calc(100% - 190px);
        }

        .section_template__product .type_carousel-vertical .gallery_thumbs {
            width: 148px;
            height: 810px;
        }

        .section_template__product .type_carousel-vertical .gallery_thumbs .swiper-slide {
            line-height: 0;
        }

        .section_template__product .type_carousel-vertical .gallery_thumbs .swiper-slide img {
            max-width: 100%;
        }

        .section_template__product .type_sticky .row {
            align-items: flex-start;
        }

        .section_template__product .type_sticky .product__img_wrap {
            max-width: 580px;
            margin: 0 auto;
        }

        .section_template__product .type_sticky .product__img_wrap img {
            width: 100%;
            margin: 0 0 50px;
        }

        .section_template__product .type_sticky .single_product__info {
            position: static;
        }

        .section_template__product .type_sticky .single_product__info.sticky {
            max-width: 400px;
            position: fixed;
        }

        .section_template__product .type_tile .product__img_wrap {
            display: flex;
            flex-wrap: wrap;
        }

        .section_template__product .type_tile .product__img_wrap .product__img_item {
            width: 50%;
            padding: 5px;
            position: relative;
            max-width: 375px;
            line-height: 0;
        }

        .section_template__product .type_tile .product__img_wrap .product__img_item:hover .product__img_zoom {
            opacity: 1;
        }

        .section_template__product .type_tile .product__img_wrap .product__img_item img {
            max-width: 100%;
        }

        .section_template__product .type_tile .product__img_wrap .product__img_zoom {
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -22px 0 0 -22px;
            display: block;
            width: 44px;
            height: 44px;
            text-align: center;
            line-height: 44px;
            background: black;
            border-radius: 5px;
            cursor: pointer;
            opacity: 0;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: opacity 0.2s ease-in-out;
            -moz-transition: opacity 0.2s ease-in-out;
            transition: opacity 0.2s ease-in-out;
        }

        .section_template__product .type_tile .product__img_wrap .product__img_zoom svg {
            margin-top: 11px;
        }

        .section_template__product .btn_buyInOneClick {
            width: 100%;
            margin-top: 15px;
        }

        .section_template__blog .blog_listing__big .article_wrap {
            padding-bottom: 30px;
            border-bottom: 1px solid #e1e1e1;
        }

        .section_template__blog .blog_listing__big .article_item {
            max-width: 980px;
            text-align: center;
            margin-right: auto;
            margin-left: auto;
        }

        .section_template__blog .article_item .article_info {
            line-height: 20px;
        }

        .section_template__blog .article_item .article_title {
            margin-bottom: 0.6em;
        }

        .section_template__blog .article_item .article_content {
            line-height: 1.4em;
        }

        .section_template__blog .article_item .btn {
            margin-top: 15px;
        }

        .section_template__blog .blog_listing__small {
            padding: 5px 0 0 0;
        }

        .section_template__blog .blog_listing__small .col-sm-4 {
            border-bottom: 1px solid #e1e1e1;
            margin-bottom: -1px;
        }

        .section_template__blog .blog_listing__small .article_item {
            padding: 32px 0 30px 0;
        }

        .section_template__blog .blog_listing__big {
            padding: 8px 0 0 0;
        }

        .section_template__blog .blog_listing__big .row {
            justify-content: center;
        }

        .section_template__blog .blog_listing__big .article_wrap {
            padding-top: 22px;
        }

        .section_template__blog .blog_listing__big .article_wrap .article_image {
            margin: 28px 0 0 0;
        }

        .section_template__blog .blog_listing__big .article_wrap .article_content {
            margin: 22px 0 0 0;
            padding: 0 10%;
        }

        .section_template__blog .blog_listing__big .article_wrap:last-child {
            border-bottom: none;
        }

        .section_template__blog .blog_pagination {
            text-align: center;
            margin-top: 35px;
        }

        .section_template__blog .blog_pagination p {
            margin-bottom: 10px;
        }

        .section_template__blog .blog_pagination span {
            margin-right: 5px;
        }

        .section_template__blog .blog_pagination .current {
            color: white;
            background: #333333;
            font-size: 16px;
            height: 44px;
            line-height: 44px;
            min-width: 44px;
            border: 1px solid #e1e1e1;
            border-radius: 5px;
            font-weight: bold;
            text-align: center;
            display: inline-block;
        }

        .section_template__blog .blog_pagination .page a {
            font-size: 16px;
            height: 44px;
            line-height: 44px;
            min-width: 44px;
            border: 1px solid #e1e1e1;
            border-radius: 5px;
            font-weight: bold;
            text-align: center;
            display: inline-block;
        }

        .section_template__blog .blog_pagination .page a:hover {
            border-color: #333333;
        }

        .section_template__article article {
            overflow: hidden;
            padding-top: 30px;
        }

        .section_template__article .layer_1 {
            background-repeat: no-repeat;
            -webkit-background-size: 100% auto;
            background-size: 100% auto;
        }

        .section_template__article .img_wrapper__small {
            padding: 17.777777% 0 0 0;
        }

        .section_template__article .img_wrapper__medium {
            padding: 31.623931% 0 0 0;
        }

        .section_template__article .img_wrapper__large {
            padding: 42.136752% 0 0 0;
        }

        .section_template__article .img_wrapper__master {
            padding: 70% 0 0 0;
        }

        .section_template__article .img_align__top {
            background-position: 0 0;
        }

        .section_template__article .img_align__center {
            background-position: 0 50%;
        }

        .section_template__article .img_align__bottom {
            background-position: 0 100%;
        }

        .section_template__article .article_info {
            text-align: center;
            margin: 0 0 24px;
            letter-spacing: -0.05em;
        }

        .section_template__article .page_heading {
            padding-bottom: 12px;
        }

        .section_template__article .article_content {
            margin: 15px 0 0 0;
        }

        .article_pagination {
            overflow: hidden;
        }

        .article_pagination__prev {
            float: left;
            margin: 30px 15px 0 0;
        }

        .article_pagination__next {
            float: right;
            margin: 30px 0 0 15px;
        }

        .article_comments__list {
            margin: 30px 0 0 0;
        }

        .article_comments__list h3 {
            font-size: 24px;
            font-weight: normal;
            letter-spacing: -0.06em;
            border-top: 1px solid #e1e1e1;
            border-bottom: 1px solid #e1e1e1;
            padding: 20px 0;
        }

        .article_comments__list li {
            list-style-type: none;
            margin: 15px 0 0 0;
            padding: 15px;
            background: rgba(0, 0, 0, 0.04);
        }

        .article_comments__list .comment_author {
            overflow: hidden;
            font-size: 12px;
            line-height: 1em;
        }

        .article_comments__list .comment_author .comment_date {
            float: right;
        }

        .article_comments__list .comment_content {
            padding: 10px 0 0 0;
        }

        .article_comments__form {
            margin: 28px 0 60px 0;
        }

        .article_comments__form h3 {
            font-size: 16px;
            text-transform: uppercase;
            letter-spacing: -0.05em;
        }

        .article_comments__form .form-group label {
            font-size: 16px;
            letter-spacing: -0.05em;
            color: #333333;
            font-weight: bold;
            margin-bottom: 4px;
        }

        .article_comments__form .form-group input {
            height: 44px;
        }

        .article_comments__form .form-input {
            margin-top: 21px;
        }

        .article_comments__form .form-btn {
            margin-top: 30px;
        }

        .template_customer .page_heading {
            position: relative;
        }

        .template_customer .page_heading a {
            font-size: 14px;
            position: absolute;
            top: 0;
            right: 0;
        }

        .template_customer .customer_wrapper {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .template_customer .customer_wrapper a:hover {
            border-color: #333333;
        }

        .template_customer .customer_item_wrap {
            max-width: 580px;
            margin-left: auto;
            margin-right: auto;
        }

        .template_customer .customer_block {
            width: 280px;
            height: 210px;
            border: 2px solid #e1e1e1;
            border-radius: 5px;
            margin: 20px 10px 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 15px 15px;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: border-color 0.4s ease-in-out;
            -moz-transition: border-color 0.4s ease-in-out;
            transition: border-color 0.4s ease-in-out;
        }

        .template_customer .customer_block:not(.customer_block__restore) svg {
            fill: #333333;
            margin-bottom: 10px;
        }

        .template_customer .customer_block.noactive svg {
            fill: #ccc;
        }

        .template_customer .customer_block.noactive h5 {
            color: #ccc;
        }

        .template_customer .account_section__info {
            display: none;
            width: 100%;
            background: white;
        }

        .template_customer .account_section__info h4 a, .template_customer .account_section__info .block_title a {
            float: right;
            margin: 0 0 0 15px;
            font-size: 12px;
            text-transform: uppercase;
            line-height: 20px;
        }

        .template_customer .account_section__info h4 a svg, .template_customer .account_section__info .block_title a svg {
            vertical-align: middle;
        }

        .template_customer .account_section__info h4 {
            margin-top: 30px;
        }

        .template_customer .account_section__info .block_title {
            height: 20px;
        }

        .template_customer .account_section__info label {
            font-size: 16px;
            font-weight: bold;
            color: #333333;
        }

        .template_customer .form-group button {
            margin-top: 10px;
        }

        .account_section__order {
            display: none;
        }

        .account_section__order h4 {
            margin-bottom: 25px;
        }

        .account_section__order table {
            width: 100%;
        }

        .account_section__order .account_order {
            padding: 24px 0;
            border-top: 1px solid #e1e1e1;
        }

        .account_section__order .account_order .cell_right {
            width: 25%;
            text-align: right;
        }

        .account_section__order .account_order td {
            padding: 5px 0;
        }

        .account_section__order .row_header td {
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            color: #333333;
            width: 13%;
        }

        .account_section__order .money {
            color: #0C9712;
        }

        .account_section__register,
        .account_section__login,
        .account_section__reset {
            display: none;
        }

        .account_section__register h4,
        .account_section__login h4,
        .account_section__reset h4 {
            position: relative;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .account_section__register h4 .link_close,
        .account_section__login h4 .link_close,
        .account_section__reset h4 .link_close {
            position: absolute;
            font-size: 14px;
            top: 0;
            right: 0;
        }

        .account_section__register .form-group,
        .account_section__login .form-group,
        .account_section__reset .form-group {
            margin-right: 0;
            margin-left: 0;
        }

        .account_section__register .form-group label,
        .account_section__login .form-group label,
        .account_section__reset .form-group label {
            font-weight: bold;
            color: #333333;
        }

        .template_customer__order .page_heading {
            margin-bottom: 11px;
        }

        .template_customer__order h4 {
            margin-bottom: 25px;
        }

        .template_customer__order .row_header th,
        .template_customer__order .cell_left {
            font-weight: bold;
            color: #333333;
        }

        .template_customer__order table {
            font-size: 15px;
            width: 100%;
        }

        .template_customer__order th, .template_customer__order td {
            padding: 11px 0 12px;
        }

        .template_customer__order p svg {
            display: inline-block;
            vertical-align: baseline;
            margin-right: 5px;
        }

        .template_customer__order .account_table .cell_right {
            text-align: right;
        }

        .template_customer__order .account_section {
            border-top: 1px solid #e1e1e1;
            display: block;
            padding-top: 20px;
        }

        .template_customer__order .account_table__wrap {
            margin-top: 15px;
            border: 2px solid black;
            border-radius: 5px;
            padding: 25px 30px;
        }

        .template_customer__order .account_table__order-details .row_border {
            border-bottom: 1px solid #e1e1e1;
        }

        .template_customer__order .account_table__order-details .row_total {
            border-top: 1px solid #e1e1e1;
        }

        .template_customer__order .account_table__order-details .row_total .cell_left {
            font-weight: bold;
            font-size: 16px;
            text-transform: uppercase;
        }

        .template_customer__order .account_table__order-details .row_total .money {
            font-size: 24px;
            font-weight: bold;
        }

        .template_customer__order .account_table__order-details .row_header {
            text-transform: uppercase;
            font-size: 16px;
            line-height: 1em;
        }

        .template_customer__order .account_table__order-details .row_header th {
            padding: 5px 0 0;
        }

        .template_customer__order .account_table__order-details .money {
            color: #0C9712;
        }

        .template_customer__order .account_table__order-details .row_product .money {
            color: #333333;
        }

        .template_customer__order .account_table__order-details .cell_min {
            width: 120px;
        }

        .template_customer__order .account_section__wrapper {
            padding-top: 15px;
        }

        .template_customer__order .account_section__wrapper h4 {
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .template_customer__order .account_section__wrapper .account_section:not(:last-child) {
            border: none;
        }

        .template_customer__account h4 {
            position: relative;
        }

        .template_customer__account h4 .link_close {
            position: absolute;
            font-size: 14px;
            top: 0;
            right: 0;
        }

        .template_customer__addresses h4 {
            position: relative;
            font-weight: bold;
            font-size: 16px;
            text-transform: uppercase;
            margin-bottom: 25px;
        }

        .template_customer__addresses h4 a {
            position: absolute;
            top: 0;
            right: 0;
        }

        .template_customer__addresses h4 a.link_edit, .template_customer__addresses h4 a.link_close {
            right: 30px;
        }

        .template_customer__addresses .account_address__item {
            padding: 15px 0;
        }

        .template_customer__addresses form {
            max-width: 580px;
            margin: 30px auto 60px;
        }

        .template_customer__addresses form label {
            font-size: 16px;
            font-weight: bold;
            color: #333333;
        }

        .template_customer__addresses .account_address__add {
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid #e1e1e1;
        }

        .template_customer__addresses .account_address__item:not(:last-child) {
            border-bottom: 1px solid #e1e1e1;
        }

        .template_page_search .search_form {
            position: relative;
            margin-top: 15px;
        }

        .template_page_search .search_form input[type='text'] {
            height: 44px;
        }

        .template_page_search .search_form input[type='submit'] {
            display: none;
        }

        .template_page_search .search_form label {
            width: 35px;
            text-align: center;
            position: absolute;
            right: 3px;
            top: 0;
            line-height: 44px;
            cursor: pointer;
        }

        .template_page_search .search_form label svg {
            vertical-align: middle;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .template_page_search .search_form label:hover svg {
            fill: #6bc5b2;
        }

        .template_page_search ul {
            list-style: none;
            padding: 0;
        }

        .template_page_search .search_results .search_results__img {
            display: block;
            float: left;
            line-height: 0;
        }

        .template_page_search .search_results li {
            overflow: hidden;
            margin-bottom: 20px;
        }

        .template_page_search .search_results .search_results__name {
            margin: 0 0 8px;
        }

        .template_page_search .search_results .search_results__desc {
            margin: 5px 0;
            font-size: 14px;
            letter-spacing: -0.05em;
            font-weight: lighter;
        }

        .template_page_search .search_results .article_info {
            margin: 5px 0 0;
            font-style: italic;
            font-size: 12px;
        }

        .template_page_search .search_results .search_results__info {
            padding-left: 180px;
        }

        .template_page_search .search_results .search_results__price {
            margin: 5px 0 0;
        }

        .template_cart .page_heading {
            padding-top: 7px;
            margin-bottom: 41px;
        }

        .template_cart .table td {
            vertical-align: middle;
            padding: 30px 10px;
        }

        .template_cart .table p {
            margin: 0;
        }

        .template_cart .table .column_product_img {
            width: 170px;
        }

        .template_cart .table .column_product_img a {
            font-size: 0;
            display: block;
        }

        .template_cart .table .column_product_img img {
            background: white;
            max-width: 100%;
        }

        .template_cart .table .column_product_info {
            width: 290px;
        }

        .template_cart .table .column_total_sum {
            width: 97px;
        }

        .template_cart .table .column_total_sum .money {
            font-size: 16px;
            font-weight: bold;
        }

        .template_cart .table .column_remove {
            width: 33px;
        }

        .template_cart .cart_items {
            border-bottom: 1px solid #e1e1e1;
            margin: 0;
        }

        .template_cart .cart_items .quantity_box label {
            display: block;
            font-size: 15px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .template_cart .cart_items .quantity_box input {
            width: 120px;
            height: 44px;
            border-radius: 5px;
            text-align: left;
            padding: 5px 10px;
        }

        .template_cart .cart_sidebar .cart_footer {
            border: 2px solid #333333;
            padding: 30px 30px;
            border-radius: 5px;
        }

        .template_cart .cart_sidebar .cart_footer p {
            margin: 0;
        }

        .template_cart .cart_sidebar .cart_footer p .money {
            font-size: 24px;
            font-weight: bold;
        }

        .template_cart .cart_sidebar hr {
            margin: 25px 0;
        }

        .template_cart .cart_sidebar .cart_info_block {
            background: #F8FBFF;
            border: 1px solid #e1e1e1;
            padding: 30px;
            margin: 30px 0;
            border-radius: 5px;
            font-style: italic;
            font-size: 14px;
            font-weight: lighter;
        }

        .template_cart .cart_sidebar .btn {
            width: 100%;
            margin-top: 15px;
        }

        .template_cart .cart_items_main {
            padding-right: 36px;
        }

        .template_cart .cart_note_wrap {
            margin: 30px 0;
        }

        .template_cart .cart_note_wrap label {
            font-weight: bold;
            margin-bottom: 15px;
        }

        .template_cart .btn_return {
            margin-top: 25px;
            display: block;
            font-weight: bold;
        }

        .template_cart .btn_return svg {
            display: inline-block;
            vertical-align: top;
            margin-right: 10px;
            fill: #8b8b8b;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: all 0.2s ease-in-out;
            -moz-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
        }

        .template_cart .btn_return:hover svg {
            fill: #6bc5b2;
        }

        .template_cart .cart__policy {
            margin: 10px 0;
        }

        .template_cart .cart__policy a {
            display: block;
            margin-bottom: 15px;
            font-size: 15px;
            letter-spacing: -0.05em;
            font-weight: bold;
        }

        .template_cart .cart__policy a svg {
            margin-right: 5px;
            display: inline-block;
            vertical-align: middle;
            fill: #8b8b8b;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: all 0.2s ease-in-out;
            -moz-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
        }

        .template_cart .cart__policy a:hover svg {
            fill: #6bc5b2;
        }

        .template_contact .section_template__contact .item_address {
            margin: 20px 0 0 0;
        }

        .template_contact .section_template__contact .item_address .contact_element h4 {
            font-size: 16px;
            letter-spacing: -0.05em;
            text-transform: uppercase;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .template_contact .section_template__contact .item_address .contact_element p {
            margin: 0;
            letter-spacing: -0.05em;
        }

        .template_contact .section_template__contact .item_address .contact_element a {
            vertical-align: top;
        }

        .template_contact .section_template__contact .item_address .contact_element + .contact_element {
            margin-top: 33px;
        }

        .template_contact .section_template__contact_form .contact_item {
            padding: 30px 13% 90px 0;
        }

        .template_contact .section_template__contact_form .contact_item h3 {
            font-size: 24px;
            line-height: 1.2em;
            font-weight: normal;
            letter-spacing: -0.045em;
        }

        .template_contact .section_template__contact_form .contact_item p {
            margin: 15px 0 0 0;
            letter-spacing: -0.045em;
            line-height: 1.15em;
        }

        .template_contact .section_template__contact_form .contact_item .contact-form {
            margin-top: 32px;
        }

        .template_contact .section_template__contact_form .contact_item .form-group {
            margin-top: 20px;
        }

        .template_contact .section_template__contact_form .contact_item label {
            font-size: 16px;
            font-weight: bold;
            letter-spacing: -0.05em;
            color: #333333;
        }

        .template_contact .section_template__contact_form .contact_item input {
            height: 44px;
            margin-top: 5px;
        }

        .template_contact .section_template__contact_form .contact_item textarea {
            margin-top: 5px;
        }

        .template_contact .section_template__contact_form .contact_item .form-group-btn {
            margin-top: 30px;
        }

        .template_contact #shopify-section-index-map {
            margin-top: 20px;
        }

        .template_404 .page_container {
            min-height: 80vh;
            background: url(404_background.jpg) center center;
            background-size: cover;
        }

        .template_404 .page_container .container {
            padding-top: 9%;
        }

        .template_404 h1 {
            font-size: 64px;
            line-height: 1em;
            font-weight: bold;
            color: #333333;
            margin-left: 46%;
            margin-bottom: 10px;
        }

        .template_404 h2 {
            margin: 0;
            font-size: 64px;
            line-height: 1em;
            margin-left: 46%;
            font-weight: bold;
        }

        .template_404 h3 {
            margin: 24px 0 0 0;
            font-size: 14px;
            margin-left: 46%;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            max-width: 450px;
            line-height: 1.8em;
        }

        .template_404 .page_search {
            margin-left: 46%;
            margin-top: 32px;
        }

        .template_404 .page_search .search_item {
            display: flex;
        }

        .template_404 .page_search input {
            height: 41px;
            width: 271px;
        }

        .template_404 .page_search .btn {
            padding: 6px 40px;
            margin-left: 10px;
        }

        .template_404 a {
            text-decoration: underline;
        }

        .template_404 a:hover {
            text-decoration: none;
        }

        .template_404 .page_footer {
            padding: 20px 0;
            text-align: center;
        }

        .about_us_page .section + .section {
            margin-top: 60px;
        }

        .about_us_page #shopify-section-index-banners-about .banner_caption h4 {
            max-width: 780px;
            line-height: 1.4em;
            letter-spacing: 0.005em;
            margin-top: 25px;
        }

        .about_us_page .section_banners_about_2 .banner_33 .style_telling {
            align-items: flex-end;
            text-align: left;
            bottom: 4%;
        }

        .about_us_page .section_banners_about_2 .banner_33 .style_telling h4 {
            margin-top: 26px;
            line-height: 1.4em;
        }

        .section_template__password .page_password_wrap {
            width: 100%;
            min-height: 100vh;
            text-align: center;
            padding: 60px 0;
        }

        .section_template__password .logo_block {
            display: inline-block;
            margin-bottom: 20px;
        }

        .section_template__password .message_block h2 {
            font-size: 40px;
            text-transform: uppercase;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .section_template__password .message_block h4 {
            font-size: 30px;
            margin-bottom: 15px;
        }

        .section_template__password .password_form label {
            margin-bottom: 5px;
        }

        .section_template__password .password_form input {
            width: 150px;
            margin: 0 auto;
        }

        .section_template__password .password_form button {
            margin: 15px 0;
        }

        .section_template__password .password_form button:hover {
            background: black;
            border-color: black;
            color: white;
        }

        .section_template__password .newslatter_form {
            width: 300px;
            margin: 0 auto;
        }

        .section_template__password .newslatter_form input {
            height: 40px;
            margin: 15px auto;
        }

        .section_template__password .newslatter_form p {
            text-transform: uppercase;
            font-weight: bold;
            color: black;
        }

        .section_template__password .newslatter_form .newsletter_btn:hover {
            background: black;
            border-color: black;
            color: white;
        }

        .section_template__password .timer_counter {
            margin: 20px 0 40px;
        }

        .section_template__password .timer_counter input {
            color: black !important;
            font-size: 30px !important;
            margin-right: -77px;
        }

        .section_template__password .timer_counter #timer_countdown > div {
            position: relative;
            margin: 0 10px;
        }

        .section_template__password .timer_counter .countdown_caption {
            position: absolute;
            top: 100%;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
            text-transform: uppercase;
            color: black;
        }

        .section_template__password .social_memu {
            margin: 30px 0;
        }

        .section_template__password .social_memu li {
            display: inline-block;
            font-size: 22px;
            margin: 0 10px;
        }

        .section_template__wishlist .page_heading {
            margin-bottom: 40px;
        }

        .section_template__wishlist .product_wishlist {
            margin-bottom: 30px;
        }

        .section_template__wishlist .product_wishlist .product_wrapper {
            background: white;
            padding: 0 15px;
        }

        .section_template__wishlist .product_wishlist:hover .product_links,
        .section_template__wishlist .product_wishlist:hover .quick_view_btn {
            opacity: 1;
        }

        .section_template__wishlist .product_image_wrap {
            position: relative;
        }

        .section_template__wishlist .product_img {
            display: block;
            line-height: 0;
        }

        .section_template__wishlist .product_img img {
            max-width: 100%;
        }

        .section_template__wishlist .desc_text {
            font-size: 14px;
            line-height: 1.5em;
        }

        .section_template__wishlist .product_links {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            text-align: center;
            margin-top: -23px;
            opacity: 0;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: opacity 0.3s ease-in-out;
            -moz-transition: opacity 0.3s ease-in-out;
            transition: opacity 0.3s ease-in-out;
        }

        .section_template__wishlist .product_links form {
            display: inline-block;
        }

        .section_template__wishlist .product_links .btn {
            margin: 3px;
        }

        .section_template__wishlist .quick_view_btn {
            position: absolute;
            right: 10px;
            top: 10px;
            width: 44px;
            height: 44px;
            border-radius: 5px;
            background: white;
            display: block;
            text-align: center;
            line-height: 44px;
            opacity: 0;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: opacity 0.3s ease-in-out;
            -moz-transition: opacity 0.3s ease-in-out;
            transition: opacity 0.3s ease-in-out;
        }

        .section_template__wishlist .quick_view_btn svg {
            fill: #333333;
            vertical-align: middle;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: all 0.2s ease-in-out;
            -moz-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
        }

        .section_template__wishlist .quick_view_btn:hover svg {
            fill: #6bc5b2;
        }

        .section_template__wishlist .wishlist_btn svg {
            margin: 0;
        }

        .section_template__wishlist .product_info {
            text-align: center;
            padding: 15px 0;
        }

        .section_template__wishlist .money {
            font-weight: bold;
            font-size: 18px;
        }

        .page_sidebar {
            padding: 24px 0 30px 0;
        }

        .sidebar .widget_header {
            padding: 20px 10px 0;
            margin: 0;
            color: #6bc5b2;
            text-transform: capitalize;
            font-size: 20px;
            font-weight: bold;
        }

        .sidebar ul {
            padding: 0 20px 20px 30px;
            list-style-type: disc;
        }

        .sidebar .list_links a {
            letter-spacing: -0.05em;
            position: relative;
            line-height: 1.7em;
        }

        .sidebar .list_links a:after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            height: 2px;
            background: #6bc5b2;
            width: 0;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: width 0.2s ease-in-out;
            -moz-transition: width 0.2s ease-in-out;
            transition: width 0.2s ease-in-out;
        }

        .sidebar .list_links a:hover:after {
            width: 100%;
        }

        .sidebar_widget__linklist {
            background: white;
        }

        .sidebar_widget__linklist li {
            position: relative;
            padding: 3px 0 2px;
            border-bottom: none;
            font-size: 16px;
            letter-spacing: 0.01em;
            color: #6bc5b2;
        }

        .sidebar_widget__linklist .with_ul {
            position: relative;
        }

        .sidebar_widget__linklist .with_ul .droped_linklist {
            display: none;
        }

        .sidebar_widget__linklist .with_ul .level_1_2 {
            padding-left: 5px;
        }

        .sidebar_widget__linklist .with_ul .level_1_3 {
            padding-left: 10px;
        }

        .sidebar_widget__linklist .with_ul .menu_trigger {
            width: 26px;
            height: 26px;
            cursor: pointer;
            position: absolute;
            top: 0;
            right: 0;
            line-height: 26px;
            text-align: center;
        }

        .sidebar_widget__types,
        .sidebar_widget__vendors {
            background: white;
        }

        .sidebar_widget__types li,
        .sidebar_widget__vendors li {
            color: #6bc5b2;
            padding: 3px 0 2px;
        }

        .sidebar_widget__banner {
            position: relative;
            overflow: hidden;
        }

        .sidebar_widget__banner .img_placeholder__small {
            padding: 53.93% 0 0 0;
        }

        .sidebar_widget__banner .img_placeholder__medium {
            padding: 100% 0 0 0;
        }

        .sidebar_widget__banner .img_placeholder__large {
            padding: 121.42% 0 0 0;
        }

        .sidebar_widget__banner .sidebar_banner_caption {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            padding: 12px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .sidebar_widget__banner .sidebar_banner_caption h6 {
            font-size: 16px;
            color: #333333;
            font-weight: normal;
            letter-spacing: -0.05em;
            margin-bottom: 0.1em;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: color 0.3s ease-in-out;
            -moz-transition: color 0.3s ease-in-out;
            transition: color 0.3s ease-in-out;
        }

        .sidebar_widget__banner .sidebar_banner_caption p {
            margin: 0;
            color: #333333;
            font-size: 18px;
            font-weight: bold;
            letter-spacing: -0.05em;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: color 0.3s ease-in-out;
            -moz-transition: color 0.3s ease-in-out;
            transition: color 0.3s ease-in-out;
        }

        .sidebar_widget__banner .sidebar_banner_caption a {
            display: block;
            width: 100%;
            height: 100%;
        }

        .sidebar_widget__banner .position_top {
            align-items: flex-start;
        }

        .sidebar_widget__banner .position_center {
            justify-content: center;
        }

        .sidebar_widget__banner .position_bottom {
            align-items: flex-end;
        }

        .sidebar_widget__banner .img_placeholder__wrap {
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: transform 0.4s ease-in-out;
            -moz-transition: transform 0.4s ease-in-out;
            transition: transform 0.4s ease-in-out;
        }

        .sidebar_widget__banner:hover .img_placeholder__wrap {
            transform: scale(1.05);
        }

        .sidebar_widget__search {
            height: 40px;
            margin: 10px 0 20px;
        }

        .sidebar_widget__search form {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .sidebar_widget__search input {
            width: 100%;
            height: 38px;
            margin-right: 10px;
            padding: 0 10px 0 10px;
        }

        .sidebar_widget__search button {
            width: 38px;
            height: 38px;
            padding: 8px;
        }

        .sidebar_widget__articles {
            padding: 5px 0px;
            background: white;
        }

        .sidebar_widget__articles .widget_content {
            margin: 16px 0 0 0;
        }

        .sidebar_widget__articles ul li ~ li {
            margin: 14px 0 0 0;
            border-top: 1px solid rgba(225, 225, 225, 0.5);
        }

        .sidebar_widget__articles .article_title {
            margin: 10px 0 0 0;
            font-size: 16px;
            line-height: 1.8em;
        }

        .sidebar_widget__articles .article_comments {
            margin: 10px 0 0 0;
        }

        .sidebar_widget__articles .article_comments:before {
            content: "\f0e6";
            margin: 0 5px 0 0;
            font: 14px "FontAwesome";
        }

        .sidebar_widget__tags {
            padding: 0 10px 15px;
            background: white;
            margin: 15px 0;
        }

        .sidebar_widget__tags .blog_tags a {
            color: #333333;
            margin: 10px 6px 0 0;
            padding: 4px 8px;
            display: inline-block;
            font-size: 12px;
            border: 1px solid #e1e1e1;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }

        .sidebar_widget__tags .blog_tags a:hover {
            border: 1px solid #333333;
        }

        .sidebar_widget__comments {
            background: white;
            padding: 15px 0px;
            margin: 15px 0;
        }

        .sidebar_widget__comments ul {
            padding: 0 20px 20px 20px;
            list-style-type: none;
        }

        .sidebar_widget__comments ul li ~ li {
            margin: 25px 0 0 0;
            padding: 25px 0 0 0;
            border-top: 1px solid #e1e1e1;
        }

        .sidebar_widget__comments a:hover {
            color: #6bc5b2;
        }

        .sidebar_widget__comments .item_icon {
            width: 30px;
            height: 20px;
            display: inline-block;
            vertical-align: top;
            float: left;
            font-size: 16px;
        }

        .sidebar_widget__comments .item_content {
            display: block;
            margin: 0 0 0 30px;
            color: #333333;
            font-size: 12px;
        }

        .sidebar_widget__comments .item_info {
            display: block;
            padding: 10px 0 0 0;
            font-size: 14px;
            font-style: italic;
        }

        .sidebar_widget__comments .item_info time {
            display: block;
            float: right;
            margin: 0 0 0 10px;
        }

        .sidebar_widget__comments .item_info .item_time {
            margin: 0 0 0 7px;
            padding: 0 0 0 10px;
        }

        .sidebar_widget__link-list {
            background: white;
            padding: 10px 0px 0px;
        }

        .sidebar_widget__link-list .widget_content {
            margin-top: 13px;
        }

        .sidebar_widget__link-list .sidebar_menu_item {
            padding: 3px 0 2px;
            border-bottom: none;
            font-size: 16px;
            letter-spacing: 0.01em;
            color: #6bc5b2;
        }

        .icon-arrow-right,
        .icon-arrow-left {
            height: 9px;
        }

        .linklist_menu_title {
            position: relative;
            padding-right: 0px;
        }

        .linklist_menu_title:after {
            position: absolute;
            content: '\f107';
            font: 14px/1em 'fontAwesome';
            right: 5px;
            top: 50%;
            margin-top: -7px;
            cursor: pointer;
            display: none;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: transform 0.3s ease-in-out;
            -moz-transition: transform 0.3s ease-in-out;
            transition: transform 0.3s ease-in-out;
        }

        .linklist_menu_title.open:after {
            transform: rotate(180deg);
        }

        .links_hover a {
            letter-spacing: -0.05em;
            position: relative;
            line-height: 1.7em;
        }

        .links_hover a:after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            height: 2px;
            background: #6bc5b2;
            width: 0;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: width 0.2s ease-in-out;
            -moz-transition: width 0.2s ease-in-out;
            transition: width 0.2s ease-in-out;
        }

        .links_hover a:hover:after {
            width: 100%;
        }

        .template_page_sections_all {
            padding: 8px 0 0 0;
        }

        .template_page_sections_all .page_heading {
            margin-top: 15px;
        }

        .template_page_sections_all .page_description {
            text-align: center;
            letter-spacing: -0.74px;
            margin-top: 4px;
        }

        .template_page_sections_all hr {
            color: #e1e1e1;
            margin: 32px 0 28px;
        }

        .template_page_sections_all .section {
            margin-bottom: 60px;
        }

        .template_page_sections_all .section_banners_demo_1 {
            margin-bottom: 20px;
        }

        .template_page_sections_all .section_banners_demo_1 .banner_100 .img_placeholder__wrap, .template_page_sections_all .section_banners_demo_2 .banner_100 .img_placeholder__wrap {
            padding: 38.6745% 0 0 0;
        }

        .template_page_sections_all .section_banners_demo_1 .banner_100 h2, .template_page_sections_all .section_banners_demo_2 .banner_100 h2 {
            font-size: 60px;
        }

        .template_page_sections_all .section_banners_demo_1 .banner_100 .btn, .template_page_sections_all .section_banners_demo_2 .banner_100 .btn {
            min-width: 126px;
            margin: 17px 3px 7px;
        }

        .template_page_sections_all .section_banners_demo_1 .banner_66 .img_placeholder__wrap, .template_page_sections_all .section_banners_demo_2 .banner_66 .img_placeholder__wrap {
            padding: 58.497% 0 0 0;
        }

        .template_page_sections_all .section_banners_demo_1 .banner_50 .img_placeholder__wrap, .template_page_sections_all .section_banners_demo_2 .banner_50 .img_placeholder__wrap {
            padding: 78.652% 0 0 0;
        }

        .template_page_sections_all .section_banners_demo_1 .banner_50 .banner_text, .template_page_sections_all .section_banners_demo_2 .banner_50 .banner_text {
            margin-bottom: 25px;
        }

        .template_page_sections_all .section_banners_demo_1 .banner_33 .img_placeholder__wrap, .template_page_sections_all .section_banners_demo_2 .banner_33 .img_placeholder__wrap {
            padding: 120.002% 0 0 0;
        }

        .template_page_sections_all .section_banners_demo_1 .section_heading, .template_page_sections_all .section_banners_demo_2 .section_heading {
            margin-bottom: 35px;
        }

        .template_page_sections_all .section_banners_demo_1 .banner_item, .template_page_sections_all .section_banners_demo_2 .banner_item {
            position: relative;
            line-height: 0;
        }

        .template_page_sections_all .section_banners_demo_1 .hover_image, .template_page_sections_all .section_banners_demo_2 .hover_image {
            overflow: hidden;
        }

        .template_page_sections_all .section_banners_demo_1 .hover_image img, .template_page_sections_all .section_banners_demo_2 .hover_image img {
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: transform 0.4s ease-in-out;
            -moz-transition: transform 0.4s ease-in-out;
            transition: transform 0.4s ease-in-out;
        }

        .template_page_sections_all .section_banners_demo_1 .hover_image:hover img, .template_page_sections_all .section_banners_demo_2 .hover_image:hover img {
            transform: scale(1.05);
        }

        .template_page_sections_all .section_banners_demo_1 .btn, .template_page_sections_all .section_banners_demo_2 .btn {
            padding: 10px 20px;
        }

        .template_page_sections_all .section_banners_demo_1 .caption_text, .template_page_sections_all .section_banners_demo_2 .caption_text {
            display: block;
        }

        .template_page_sections_all .section_banners_demo_1 .banner_caption, .template_page_sections_all .section_banners_demo_2 .banner_caption {
            line-height: 1em;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 15px 35px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .template_page_sections_all .section_banners_demo_1 .banner_caption h2, .template_page_sections_all .section_banners_demo_2 .banner_caption h2 {
            text-transform: uppercase;
            margin: 15px 0;
            line-height: 1em;
            letter-spacing: -0.05em;
        }

        .template_page_sections_all .section_banners_demo_1 .banner_caption h4, .template_page_sections_all .section_banners_demo_2 .banner_caption h4 {
            font-size: 16px;
            letter-spacing: -0.05em;
        }

        .template_page_sections_all .section_banners_demo_1 .banner_caption.style_minimal, .template_page_sections_all .section_banners_demo_2 .banner_caption.style_minimal {
            text-align: left;
            padding: 30px 50px;
        }

        .template_page_sections_all .section_banners_demo_1 .banner_caption.style_minimal .caption_text, .template_page_sections_all .section_banners_demo_2 .banner_caption.style_minimal .caption_text {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-end;
        }

        .template_page_sections_all .section_banners_demo_1 .banner_caption.style_minimal .banner_text, .template_page_sections_all .section_banners_demo_2 .banner_caption.style_minimal .banner_text {
            position: relative;
            font-weight: bold;
            display: inline-block;
            color: #333333;
        }

        .template_page_sections_all .section_banners_demo_1 .banner_caption.style_minimal .banner_text:after, .template_page_sections_all .section_banners_demo_2 .banner_caption.style_minimal .banner_text:after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 0;
            height: 2px;
            background: #333333;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -ms-perspective: 1000;
            perspective: 1000;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
        }

        .template_page_sections_all .section_banners_demo_1 .banner_caption.style_minimal .btn, .template_page_sections_all .section_banners_demo_2 .banner_caption.style_minimal .btn {
            margin-bottom: 19px;
        }

        .template_page_sections_all .section_banners_demo_1 .banner_caption.style_minimal .inverted .banner_text, .template_page_sections_all .section_banners_demo_2 .banner_caption.style_minimal .inverted .banner_text {
            color: white;
        }

        .template_page_sections_all .section_banners_demo_1 .banner_caption.style_minimal .inverted .banner_text:after, .template_page_sections_all .section_banners_demo_2 .banner_caption.style_minimal .inverted .banner_text:after {
            background: white;
        }

        .template_page_sections_all .section_banners_demo_1 .banner_caption.style_minimal .inverted .btn, .template_page_sections_all .section_banners_demo_2 .banner_caption.style_minimal .inverted .btn {
            color: #3c5ebe;
            background: white;
            border-color: white;
        }

        .template_page_sections_all .section_banners_demo_1 .banner_caption.style_minimal .inverted .btn:hover, .template_page_sections_all .section_banners_demo_2 .banner_caption.style_minimal .inverted .btn:hover {
            background: #3c5ebe;
            border-color: #3c5ebe;
            color: #ffffff;
        }

        .template_page_sections_all .section_banners_demo_1 .style_minimal a.caption_text:hover .banner_text:after, .template_page_sections_all .section_banners_demo_2 .style_minimal a.caption_text:hover .banner_text:after {
            width: 100%;
        }

        .template_page_sections_all .section_collection-list_demo {
            margin-top: 20px;
        }

        .template_page_sections_all .index-section-slideshow-demo {
            margin-top: 20px;
        }

        .template_page_sections_all .index_section_testimonials_demo_1, .template_page_sections_all .index_section_testimonials_demo_2 {
            margin-top: 42px;
        }

        @media (max-width: 767px) {
            .template_page_sections_all .section_banners_demo_1 .banner_100 h2, .template_page_sections_all .section_banners_demo_2 .banner_100 h2 {
                font-size: 42px;
            }
        }

        @media (max-width: 639px) {
            .template_page_sections_all .section_banners_demo_1 .banner_caption.style_minimal, .template_page_sections_all .section_banners_demo_2 .banner_caption.style_minimal {
                padding: 15px;
            }

            .template_page_sections_all .section_banners_demo_1 .banner_caption.style_minimal .btn, .template_page_sections_all .section_banners_demo_2 .banner_caption.style_minimal .btn {
                margin-bottom: 5px;
            }

            .template_page_sections_all .section_banners_demo_1 .banner_100 h2, .template_page_sections_all .section_banners_demo_2 .banner_100 h2 {
                font-size: 28px;
                margin: 10px 0;
            }
        }

        @media (max-width: 479px) {
            .template_page_sections_all .section_banners_demo_1 .banner_100 h2, .template_page_sections_all .section_banners_demo_2 .banner_100 h2 {
                font-size: 18px;
                margin: 5px 0;
                font-weight: 500;
            }

            .template_page_sections_all .section_banners_demo_1 .banner_100 h4, .template_page_sections_all .section_banners_demo_2 .banner_100 h4 {
                font-size: 14px;
            }

            .template_page_sections_all .section_banners_demo_1 .banner_100 .btn, .template_page_sections_all .section_banners_demo_2 .banner_100 .btn {
                min-width: 100px;
                margin: 3px;
                font-size: 12px;
                padding: 5px 12px;
            }
        }

    </style>

    <div class="container" style="height: auto;">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-8">
                {{--          start--}}

                <div class="main_content  ">
                    <!-- BEGIN content_for_index -->
                    <div id="shopify-section-1592481403120"
                         class="shopify-section index-section index-section-slideshow index-section-slideshow-demo">


                        <div
                            class="section section_homepage section_slideshow section_slideshow__small swiper-container swiper-container-initialized swiper-container-horizontal"
                            id="slideshow_1592481403120" data-autoplay="false" data-speed="5000" data-effect="slide"
                            data-pagination="dynamicBullets" style="width: 100%">
                            <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">


                

                            </div>


                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>


                    </div>
                    <div id="shopify-section-1526906788377" class="shopify-section section section_divider">
                        <div class="divider_item container" style="margin-top: 35px;"></div>


                        <div class="divider_item tablet_show container" style="margin-top: 35px;"></div>


                    </div>
                 

                    <div class="container layout_boxed">

                       
                      
                        <div class="banner_item">
                            <h5>Sweet Potatoes</h5>
                            <img src="{{asset('images/Done/patatoes.png')}}" alt="">
                           <p>
                            Sweet potato is native to the tropical regions of the Americas.[4][5] Of the approximately 50 genera and more than 1,000 species of Convolvulaceae, I. batatas is the only crop plant of major importance—some others are used locally (e.g., I. aquatica "kangkong"), but many are poisonous. The genus Ipomoea that contains the sweet potato also includes several garden flowers called morning glories, though that term is not usually extended to I. batatas. Some cultivars of I. batatas are grown as ornamental plants under the name tuberous morning glory, and used in a horticultural context.</p>
                        </div>

                      

                    </div>




                    <div id="shopify-section-1575280612997" class="shopify-section section section_divider">
                        <div class="divider_item container" style="margin-top: 50px;"></div>


                        <div class="divider_item tablet_show container" style="margin-top: 30px;"></div>


                    </div>

                    <div id="shopify-section-1575288151871" class="shopify-section section section_divider">
                        <div class="divider_item container" style="margin-top: 50px;"></div>


                        <div class="divider_item tablet_show container" style="margin-top: 30px;"></div>


                    </div>
                    <div id="shopify-section-1575294803750"
                         class="shopify-section section section_homepage section_featured-with-banners">

                         <div id="shopify-section-1575280519933"
                         class="shopify-section section section_homepage section_collection-list">
                        <div class="collection_listing_wrap container">


                            <h4 class="section_heading" style="color: white;font-size: 30px;">You May Also Like</h4>


                            <div class="row collection_listing__main collection_listing_size_boxed">

                                <div class="col-sm-3 type_1">

                                    <a class="collection_item" href="{{route('collections')}}">
                                        <div class="collection_img">

                                            <img style="width: 100%" class="blur-up lazyloaded"
                                                 src="{{asset('images/Done/beans.png')}}"
                                                 data-src="{{asset('images/Done/beans.png')}}"
                                                 alt="Beans">

                                        </div>
                                       

                                        <div class="collection_caption">
                                            <div>
                                                <h5 class="collection_title">Beans</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <div class="col-sm-3 type_1">


                                    <a class="collection_item" href="{{route('collections')}}">
                                        <div class="collection_img">

                                            <img style="width: 100%" class="blur-up lazyloaded"
                                                 src="{{asset('images/Done/carots.png')}}"
                                                 data-src="{{asset('images/Done/carots.png')}}"
                                                 alt="Carrots">

                                        </div>

                                        <div class="collection_caption">
                                            <div>
                                                <h5 class="collection_title">Fresh Carrots</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <div class="col-sm-3 type_1">


                                    <a class="collection_item" href="{{route('collections')}}">
                                        <div class="collection_img">

                                            <img style="width: 100%" class="blur-up lazyloaded"
                                                 src="{{asset('images/Done/groundNuts.png')}}"
                                                 data-src="{{asset('images/Done/groundNuts.png')}}"
                                                 alt="Ground Nuts">

                                        </div>

                                        <div class="collection_caption">
                                            <div>
                                                <h5 class="collection_title">Groundnuts</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <div class="col-sm-3 type_1">


                                    <a class="collection_item" href="{{route('collections')}}">
                                        <div class="collection_img">

                                            <img style="width: 100%" class="blur-up lazyloaded"
                                                 src="{{asset('images/Done/patatoes.png')}}"
                                                 data-src="/{{asset('images/Done/patatoes.png')}}"
                                                 alt="Grounf Potatoes">

                                        </div>

                                        <div class="collection_caption">
                                            <div>
                                                <h5 class="collection_title">Ground Potatoes</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <div class="col-sm-3 type_1">


                                    <a class="collection_item" href="{{route('collections')}}">
                                        <div class="collection_img">

                                            <img style="width: 100%" class="blur-up lazyloaded"
                                                 src="{{asset('images/Done/tomatoes.png')}}"
                                                 data-src="{{asset('images/Done/sweetpotaoes.png')}}"
                                                 alt="Meat">

                                        </div>

                                        <div class="collection_caption">
                                            <div>
                                                <h5 class="collection_title">Meat</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <div class="col-sm-3 type_1">


                                    <a class="collection_item" href="{{route('collections')}}">
                                        <div class="collection_img">

                                            <img style="width: 100%" class="blur-up lazyloaded"
                                                 src="{{asset('images/mbambaira.jpeg')}}"
                                                 data-src="{{asset('images/mbambaira.jpeg')}}"
                                                 alt="Drinks">

                                        </div>

                                        <div class="collection_caption">
                                            <div>
                                                <h5 class="collection_title">Drinks</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <div class="col-sm-3 type_1">


                                    <a class="collection_item" href="{{route('collections')}}">
                                        <div class="collection_img">

                                            <img style="width: 100%" class="blur-up lazyloaded"
                                                 src="{{asset('images/Done/okra.png')}}"
                                                 data-src="{{asset('images/Done/okra.png')}}"
                                                 alt="Derere">

                                        </div>

                                        <div class="collection_caption">
                                            <div>
                                                <h5 class="collection_title">Derere</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <div class="col-sm-3 type_1">


                                    <a class="collection_item" href="{{route('collections')}}">
                                        <div class="collection_img">

                                            <img style="width: 100%" class="blur-up lazyloaded"
                                            src="{{asset('images/Done/maize.png')}}"
                                            data-src="{{asset('images/Done/maize.png')}}"
                                            alt="Maize">


                                        </div>

                                        <div class="collection_caption">
                                            <div>
                                                <h5 class="collection_title">Maize</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                            </div>


                        </div>

                    </div>







                    </div>


                </div>

                {{--          end--}}
            </div>
        </div>
    </div>
@endsection
