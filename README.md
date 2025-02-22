# PHP: Unexpected Arithmetic Behavior with String and Numeric Values

This example demonstrates a common issue in PHP caused by loose typing and implicit type conversion during arithmetic operations. When a string containing both numeric and non-numeric characters is added to an integer, PHP's behavior might not be what you expect. The script attempts to perform an arithmetic sum but yields an incorrect result due to the implicit conversion of the string '4a' to an integer.  The solution demonstrates how to handle such scenarios robustly using strict type checking and error handling.
