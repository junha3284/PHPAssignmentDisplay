PHP Assignment Display
======================

Overview
-------------

This is an very simple app to retrieve C++ source file from my school's working directory with syntax highlighting and generate an HTML page to display the code using PHP.

Usage
---------

Arguments that the app takes is `$type` and `$id`.

For example, if I want to retrieve an assignment called asn1.cpp, I have to specify this in URL: 
       `http://www.example.com/asn.php?type=asn&id=asn1`
where `$type` is usually `asn` for assignment and `ex` for exercise. `$id` is usually the filename without extension.

Acknowledgement
----------------

	1. Syntax Highlighter from (http://alexgorbatchev.com/SyntaxHighlighter/) by Alex Gorbatchev.