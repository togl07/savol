<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/MathJax.js?config=TeX-MML-AM_CHTML">
</script>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }

    textarea {
        width: 100%;
        height: 150px;
        font-family: "Courier New", monospace;
        font-size: 18px;
    }

    #latex-preview {
        margin-top: 20px;
        padding: 10px;
        border: 1px solid #ccc;
        background-color: #f9f9f9;
        min-height: 100px;
    }
</style>
<h1>Enter Your Math Formula (in LaTeX)</h1>

<!-- Form for LaTeX input -->
<form action="{{$len}}/addedsuccessfuly" method="post">
    @csrf
    <textarea id="latex-input" placeholder="Type your LaTeX math formula here..." name="latex"></textarea>
    <input name="option1" placeholder="option1">
    <input name="option2" placeholder="option2">
    <input name="option3" placeholder="option3">
    <input name="true" placeholder="True Answer">
    <button type="submit">Latex</button>
</form>

<div id="latex-preview" name="late">
</div>

<script>
    const latexInput = document.getElementById('latex-input');
    const previewArea = document.getElementById('latex-preview');
    function replaceLatexWithPythonSymbols(latexCode) {
        return latexCode;
    }
    latexInput.addEventListener('input', function() {
        let latexCode = latexInput.value;
        latexCode = replaceLatexWithPythonSymbols(latexCode);

        // Display the updated LaTeX code in the preview area
        previewArea.innerHTML = '$$' + latexCode + '$$';
        MathJax.Hub.Queue(["Typeset", MathJax.Hub, previewArea]); // Rerender with MathJax
    });
</script><br>
<a href="/"><button name="button">bosh Sahifaga Qaytish</button></a>
