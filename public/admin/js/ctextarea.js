let theEditor;
ClassicEditor.create(document.querySelector("#contentDetails"), {
    ckfinder: {
        uploadUrl:
            "/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=File$responseType=json",
    },
    mediaEmbed: {
        previewsInData: true,
    },
})
    .then((editor) => {
        theEditor = editor;
    })
    .catch((error) => {
        console.error(error);
    });

function getDataFromTheEditor() {
    return theEditor.getData();
}
