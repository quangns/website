from flask import Flask, redirect, render_template, request, send_from_directory
app = Flask(__name__, static_folder='static')


@app.route("/")
def main():
    return render_template('site.html')
if __name__ == '__main__':
    app.run(host="127.0.0.1", port=8080, debug=True)
