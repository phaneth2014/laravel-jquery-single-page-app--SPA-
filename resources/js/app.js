import './bootstrap';
import './progressbar.min'

import $ from 'jquery';
window.$ = $;
window.jQuery = $;

import DataTable from 'datatables.net-dt';
import 'datatables.net-dt/css/dataTables.dataTables.min.css';

import 'datatables.net-buttons';
import 'datatables.net-buttons-dt/css/buttons.dataTables.min.css';

import JSZip from 'jszip';
window.JSZip = JSZip;

import pdfMake from 'pdfmake/build/pdfmake';
import * as pdfFonts from 'pdfmake/build/vfs_fonts';
pdfMake.vfs = pdfFonts.default?.vfs || pdfFonts.vfs;
window.pdfMake = pdfMake;

import 'datatables.net-buttons/js/buttons.html5.js';
import 'datatables.net-buttons/js/buttons.print.js';


