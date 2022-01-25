
const argv = require('minimist')(process.argv.slice(3))

process.env.BABEL_ENV = argv.pro ? 'production' : 'development'
process.env.NODE_ENV = argv.pro ? 'production' : 'development'

const packageJSON = require('./package.json')

const path = require('path')
const browserSync = require('browser-sync').create()
const { src, dest, watch, series } = require('gulp')
const	autoprefixer = require('gulp-autoprefixer')
const gulpif = require('gulp-if')
const	plumber = require('gulp-plumber')
const	sass = require('gulp-sass')
const touch = require('gulp-touch-fd')

const isBrowsersyncOn = (process.argv[2] === 'start') ? true : false

const webroot = path.join(process.cwd(), '../../../')

const sassTask = function () {
	return src('./src/sass/**/*.scss')
		.pipe(plumber())
		.pipe(sass().on('error', sass.logError))
		.pipe(autoprefixer())
		.pipe(dest(path.join(webroot, 'css')))
		.pipe(touch())
		.pipe(gulpif(isBrowsersyncOn, browserSync.stream()))
}

exports.sass = sassTask

const watchTask = () => {
	watch('./src/sass/**/*.scss', sassTask)
}

exports.watch = watchTask

exports.start = series(
	sassTask,
	() => {
		watch('./src/sass/**/*.scss', sassTask)

		browserSync.init({
			open: false,
			proxy: packageJSON.proxy
		})
	},
)
