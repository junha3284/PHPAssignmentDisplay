PHP Assignment Display
======================

Overview
-------------

This is a simple app to retrieve C++ source file from my school's working directory with syntax highlighting and generate an HTML page to display the code using PHP.

Usage
---------

Parameters are `$type` and `$id`.

For example, to retrieve an assignment called asn1.cpp, specify this in URL: 
       `http://www.example.com/asn.php?type=asn&id=asn1`
where `$type` is usually `asn` for assignment and `ex` for exercise. `$id` is usually the filename without extension.

Acknowledgement
----------------

	1. Syntax Highlighter from (http://alexgorbatchev.com/SyntaxHighlighter/) by Alex Gorbatchev.
