completion:^(NSData *output){
  const char *firstLine = [[NSSTring stringWithFromat:@"> %@\n\n", code] UTF8String];
  NSMutableData *data = [NSMutableData dataWithBytes:firstLine length:strlen(firstLine)];

  [data appendData:output];
  dispatch_async(dispatch_get_main_queue(), ^{
    // 実行結果をテキストで見る場合
    [self setUTF8TEXT:data];
    // 実行結果をHTMLで見る場合
    [self setUTF8HTML:data]
  });
}
