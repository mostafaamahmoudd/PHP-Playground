<?php

namespace Mustafa\Temp;

use Mustafa\Temp\Compress\Compress;
use Mustafa\Temp\Compress\Types\GZCompress;
use Mustafa\Temp\Compress\Types\ZipCompress;
use Mustafa\Temp\Converter\Audio\AudioConverter;
use Mustafa\Temp\Converter\Audio\AudioTypes;
use Mustafa\Temp\Converter\Converter;
use Mustafa\Temp\Converter\Video\VideoConverter;
use Mustafa\Temp\Converter\Video\VideoTypes;
use Mustafa\Temp\FileScanner\Audio\MP3FileScanner;
use Mustafa\Temp\FileScanner\FileScanner;
use Mustafa\Temp\FileScanner\Video\MP4FileScanner;
use Mustafa\Temp\Normalizer\Audio\AudioNormalizer;
use Mustafa\Temp\Normalizer\Normalizer;
use Mustafa\Temp\Normalizer\Video\VideoNormalizer;

class FileConverterFacade
{
    private string $file;
    private bool $isAudio = true;

    private FileScanner $scanner;
    private Converter $converter;
    private Compress $compress;
    private Normalizer $normalizer;

    /**
     * @param string $file
     */
    public function __construct(string $file)
    {
        $this->file = $file;
        $this->detectType();
        $this->load();
    }

    private function detectType()
    {
        if (preg_match('/\.(mp3|aa|aac)/i', $this->file)) {
            $this->scanner = new MP3FileScanner($this->file);
            $this->converter = new AudioConverter();
            $this->compress = new ZipCompress();
            $this->normalizer = new AudioNormalizer();
        } else {
            $this->isAudio = false;
            $this->scanner = new MP4FileScanner($this->file);
            $this->converter = new VideoConverter();
            $this->compress = new GZCompress();
            $this->normalizer = new VideoNormalizer();
        }
    }

    private function load()
    {
        if ($this->scanner->scan()) {
            $this->normalizer->normalize($this->file);
        } else {
            throw new CorruptedFileException();
        }
    }

    public function convert()
    {
        if ($this->isAudio) {
            $this->converter->convert($this->file, AudioTypes::AUDIO_MP3, AudioTypes::AUDIO_AA);
        } else {
            $this->converter->convert($this->file, VideoTypes::AUDIO_MP4, VideoTypes::AUDIO_FLV);
        }

        $this->compress->compress($this->file);
    }
}