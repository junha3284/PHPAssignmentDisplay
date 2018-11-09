PHP Assignment Display
======================

This is a simple app to retrieve C++ source files from Simon Fraser University's working directory with syntax highlighting and generate an HTML page to display the source files using PHP.

Usage
---------

Parameters are `$type` and `$id`.

For example, to retrieve an assignment called asn1.cpp, specify this in URL: 
       `http://www.example.com/asn.php?type=asn&id=asn1`
where `$type` is `asn` for assignment and `ex` for exercise. `$id` is the filename without extension.

Acknowledgement
----------------

	1. Syntax Highlighter from (http://alexgorbatchev.com/SyntaxHighlighter/) by Alex Gorbatchev.
