"use strict";
var quill = new Quill("#snow-editor", {
    theme: "snow",
    modules: {toolbar: [[{font: []}, {size: []}], ["bold", "italic", "underline", "strike"], [{color: []}, {background: []}], [{script: "super"}, {script: "sub"}], [{header: [!1, 1, 2, 3, 4, 5, 6]}, "blockquote", "code-block"], [{list: "ordered"}, {list: "bullet"}, {indent: "-1"}, {indent: "+1"}], ["direction", {align: []}], ["link", "image", "video"], ["clean"]]}
}), quill = new Quill("#bubble-editor", {theme: "bubble"});