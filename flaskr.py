from flask import Flask, redirect, render_template, request, send_from_directory
app = Flask(__name__, static_url_path='')


@app.route("/")
def main():
    return render_template('basic1.html')
if __name__ == '__main__':
    app.run(host="127.0.0.1", port=8080, debug=True)